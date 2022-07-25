<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ReportModuleController extends Controller {
    public function userMgt(){
        return view('user-management');
    }
    public function index() {
        $date = Carbon::today()->format( 'Y-m-d' );
        $weekstart = Carbon::now()->startOfWeek( Carbon::SUNDAY )->format( 'Y-m-d' );
        $weekend =  Carbon::now()->startOfWeek( Carbon::SATURDAY )->format( 'Y-m-d' );
        // // aLlpayment
        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => Carbon::now()->subDays( 7 )->startOfDay()->format( 'Y-m-d H:i:s' ),
            'endDate' =>Carbon::today()->format( 'Y-m-d H:i:s' ),
        ) );

        $paidUsers = 0;
        foreach ( $result as $item ) {
            $paidUsers += $item->amount;
        }
        // return $paidUsers;
        $depotx = ( new VMSAPI )->getVehicleOverDue( Carbon::yesterday()->startOfDay()->format( 'Y-m-d' ), 1000 );
        $depot = 0;
        $overdueOneWeek = Carbon::now()->subDays( 9 )->startOfDay()->format( 'Y-m-d' );
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $overdueOneWeek ) {
                    // from sunday till today
                    $depot += $value->needpayment;
                    $arr[] = $value->duetime ;
                }
            }
        }
        // return $arr;
        // get due payment
        $unpaid = $this->DuePayment();
        $unpaidAmount = $unpaid[ 'totalAmount' ];

        $income  = $paidUsers + $unpaidAmount;
        $depot =  $depot + $unpaidAmount;
        return view( 'report-module', [ 'paid' => $paidUsers, 'unpaid' => $unpaidAmount, 'income' => $income, 'depot' => $depot ] );
    }

    public function allPayments() {
        $result = json_decode( Http::get( 'https://tella.envio.africa/api/all-payment' ) );
        // dd( $result );
        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }
        // dd( $result );
        return view( 'all-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function allPaymentFilter( Request $request ) {

        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => $request->startDate,
            'endDate' => $request->endDate
        ) );
        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }

        return view( 'all-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function allPaymentFilter2( $date ) {
        // dd( $date );
        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => Carbon::now()->subDays( $date )->startOfDay()->format( 'Y-m-d H:i:s' ),
            'endDate' =>Carbon::today()->format( 'Y-m-d H:i:s' ),
        ) );
        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }

        return view( 'all-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function duePayments() {
        // $result = ( new VMSAPI )->defaultOverDue();
        // $result = $result->Data;
        $date = Carbon::now()->subDays( 1 )->endOfDay()->format( 'Y-m-d H:i:s' );
        $result = DB::table( 'duepayments' )->leftjoin( 'vehicle_status', 'vehicle_status.systemno', 'duepayments.systemno' )->where( 'duetime', '>', $date )->get();
        // return $result;
        $totalAmount = 0;
        foreach ( $result as  $value ) {
            $totalAmount +=  $value->needpayment;
        }

        // return $gps;
        // dd( $result );
        return view( 'due-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function overduePayments() {
        // $date = Carbon::yesterday()->startOfDay()->format( 'Y-m-d H:i:s' );
        $date = Carbon::now()->subDays( 1 )->endOfDay()->format( 'Y-m-d H:i:s' );
        $date2 = Carbon::now()->subDays( 2 )->startOfDay()->format( 'Y-m-d H:i:s' );

        // dd( $date );

        $result = DB::table( 'duepayments' )->leftjoin( 'vehicle_status', 'vehicle_status.systemno', 'duepayments.systemno' )->whereBetween( 'duetime', [ $date2, $date ] )->get();
        // $A = DB::table( 'activities' )->join( 'users', 'users.id', 'activities.user_id' )->select( 'activities.*', 'users.name', 'users.phone' )->orderBy( 'activities.id', 'DESC' )->get()->take( 5 );

        // dd( $result );

        $totalAmount = 0;
        foreach ( $result as $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return view( 'overdue-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function criticalPayments() {
        // $date = Carbon::yesterday()->startOfDay()->format( 'Y-m-d H:i:s' );
        $date = Carbon::now()->subDays( 3 )->startOfDay()->format( 'Y-m-d H:i:s' );
        $date2 = Carbon::now()->subDays( 5 )->endOfDay()->format( 'Y-m-d H:i:s' );

        // dd( $date );

        // $result = DB::table( 'duepayments' )->whereBetween( 'duetime', [ $date2, $date ] )->get();
        $result = DB::table( 'duepayments' )->leftjoin( 'vehicle_status', 'vehicle_status.systemno', 'duepayments.systemno' )->whereBetween( 'duetime', [ $date2, $date ] )->select('duepayments.*','vehicle_status.time' )->get();
// dd($result);
        $totalAmount = 0;

        foreach ( $result as $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return view( 'critical-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function codeRed() {
        $date = Carbon::now()->subDays( 5 )->endOfDay()->format( 'Y-m-d H:i:s' );
        // $result = DB::table( 'duepayments' )->where( 'duetime', '<', $date )->get();

                $result = DB::table( 'duepayments' )->leftjoin( 'vehicle_status', 'vehicle_status.systemno', 'duepayments.systemno' )->where( 'duetime', '<', $date )->select('duepayments.*','vehicle_status.time' )->get();

        $totalAmount = 0;
        foreach ( $result as $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return view( 'code-red', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function codeRedFilter( Request $request ) {
        $date = Carbon::now()->subDays( 2 )->endOfDay()->format( 'Y-m-d H:i:s' );
        $date2 = Carbon::now()->subDays( 5 )->startOfDay()->format( 'Y-m-d H:i:s' );
        $result = DB::table( 'duepayments' )->whereBetween( 'duetime', [ $date2, $date ] )->get();
        $totalAmount = 0;
        foreach ( $result as $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return view( 'code-red', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function codeRedFilter2( $date ) {
        // return $date;
        $date2 = Carbon::now()->subDays( $date )->endOfDay()->format( 'Y-m-d H:i:s' );
        // $result = DB::table( 'duepayments' )->where( 'duetime', '<', $date )->get();
        $date = Carbon::now()->subDays( 5 )->startOfDay()->format( 'Y-m-d H:i:s' );
        $result = DB::table( 'duepayments' )->whereBetween( 'duetime', [ $date2, $date ] )->get();

        $totalAmount = 0;
        foreach ( $result as $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return view( 'code-red', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function DuePayment() {
        $result = ( new VMSAPI )->defaultOverDue();
        $result = $result->Data;
        $totalAmount = 0;
        foreach ( $result as  $value ) {
            $totalAmount +=  $value->needpayment;
        }
        return  array(
            'data' => $result,
            'totalAmount' => $totalAmount
        ) ;
        // return view( 'test', [ 'data' => $data ] );
    }

    public function critical( Request $request ) {
        $date = Carbon::now()->subDays( 2 )->format( 'Y-m-d' );
        $page = 1000;
        $totalAmount = 0;
        $result = ( new VMSAPI )->getVehicleOverDue( $date, $page );
        foreach ( $result->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                $resultz[] = $value ;
                $totalAmount +=  $value->needpayment;

            }
        }
        return array(
            'data' => $resultz,
            'totalAmount' => $totalAmount
        );
    }

    public function reportModule() {
        $date = Carbon::today()->format( 'Y-m-d' );
        $weekstart = Carbon::now()->startOfWeek( Carbon::SUNDAY )->format( 'Y-m-d' );
        $weekend =  Carbon::now()->startOfWeek( Carbon::SATURDAY )->format( 'Y-m-d' );
        // // aLlpayment
        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => Carbon::now()->subDays( 7 )->startOfDay()->format( 'Y-m-d H:i:s' ),
            'endDate' =>Carbon::today()->format( 'Y-m-d H:i:s' ),
        ) );

        $paidUsers = 0;
        foreach ( $result as $item ) {
            $paidUsers += $item->amount;
        }
        // return $paidUsers;
        $depotx = ( new VMSAPI )->getVehicleOverDue( Carbon::yesterday()->startOfDay()->format( 'Y-m-d' ), 1000 );
        $depot = 0;
        $overdueOneWeek = Carbon::now()->subDays( 9 )->startOfDay()->format( 'Y-m-d' );
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $overdueOneWeek ) {
                    // from sunday till today
                    $depot += $value->needpayment;
                    $arr[] = $value->duetime ;
                }
            }
        }
        // return $arr;
        // get due payment
        $unpaid = $this->DuePayment();
        $unpaidAmount = $unpaid[ 'totalAmount' ];
        return array(
            'paid' => number_format( $paidUsers, 2 ),
            'unpaid' => number_format( $unpaidAmount, 2 ),
            'income' => number_format( $paidUsers + $unpaidAmount, 2 ),
            'depot' =>number_format( $depot + $unpaidAmount, 2 ),
        );
    }

    public function reportModuleFilter( Request $request ) {
        // dd( $request->all() );
        $startDate = Carbon::parse( $request->startDate, 'UTC' )->format( 'Y-m-d' );
        $endDate = Carbon::parse( $request->endDate, 'UTC' )->format( 'Y-m-d' );

        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => $startDate,
            'endDate' => $endDate
        ) );
        $paidUsers = 0;
        foreach ( $result as $item ) {
            $paidUsers += $item->amount;
        }

        // return $totalAmount;
        $depotx = ( new VMSAPI )->getVehicleOverDue( $endDate, 300 );
        $depot = 0;
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $startDate ) {
                    $arr[] = $value->duetime ;
                    $depot += $value->needpayment;

                }
            }
        }
        $unpaid = $this->DuePayment();
        $unpaidAmount = $depot;

        $income  = $paidUsers + $unpaidAmount;
        $depot =  $depot + $unpaidAmount;
        return view( 'report-module', [ 'paid' => $paidUsers, 'unpaid' => $unpaidAmount, 'income' => $income, 'depot' => $depot ] );
    }

    public function reportModuleFilter2( Request $request ) {
        $date = $request->date;
        $endDate = Carbon::now()->subDays( $date )->endOfDay()->format( 'Y-m-d' );
        $startDate =  Carbon::today()->format( 'Y-m-d' );
        $result =  ( new ApiController )->post( 'https://tella.envio.africa/api/all-payment-date', array(
            'startDate' => $endDate,
            'endDate' => $startDate
        ) );
        $paidUsers = 0;
        foreach ( $result as $item ) {
            $paidUsers += $item->amount;
        }

        // return $totalAmount;
        $depotx = ( new VMSAPI )->getVehicleOverDue( $startDate, 300 );

        // return $depotx;
        $depot = 0;
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $endDate ) {
                    $arr[] = $value->duetime ;
                    $depot += $value->needpayment;

                }
            }
        }
        // dd( $depot );

        $unpaid = $this->DuePayment();
        $unpaidAmount = $depot;

        $income  = $paidUsers + $unpaidAmount;
        $depot =  $depot + $unpaidAmount;
        return view( 'report-module', [ 'paid' => $paidUsers, 'unpaid' => $unpaidAmount, 'income' => $income, 'depot' => $depot ] );
    }

    public function userInformation( $phone, $plate, $investorphone ) {
        // $phone = $request->phone;
        // $plate = $request->plate;
        // $investorphone = $request->investorphone;
        // $phone = '08134988013';
        // $plate = 'BWR971XE';

        $driverDetails = ( new VMSAPI )->getDriverInfo( $phone );
        $vehicleDetails = ( new VMSAPI )->getVehicleRecord( $plate );
        if ( !empty( $vehicleDetails ) ) {
            $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $vehicleDetails->Data->systemno );
        }
        $investorInfo = ( new VMSAPI )->getInvestorInfo( $investorphone );
        $result = array(
            'driverDetail' => ( !empty( $driverDetails ) ) ? $driverDetails->Data : 'null',
            'vehicleDetails' => ( !empty( $vehicleDetails ) ) ? $vehicleDetails->Data : 'null',
            'vehicleLocation' => ( !empty( $vehicleLocation ) ) ? $vehicleLocation->Data[ 0 ] : 'null',
            'investorInfo' => ( !empty( $investorInfo ) ) ? $investorInfo->Data : 'null',
        );
        return view( 'user-information', [ 'data' => $result ] );
    }

}
