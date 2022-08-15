<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ReportModuleController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        return view( 'report-module' );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }

    public function allPayments() {
        $result = json_decode( Http::get( 'https://tella.envio.africa/api/all-payment' ) );

        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }
        dd( $result );
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

    public function duePayments() {
        $result = ( new VMSAPI )->defaultOverDue();
        $result = $result->Data;
        $totalAmount = 0;
        foreach ( $result as  $value ) {
            $totalAmount +=  $value->needpayment;
        }
        // dd( $result );
        return view( 'due-payments', [ 'totalAmount' => $totalAmount, 'data' => $result ] );
    }

    public function overduePaymentsxxx() {
        $date = Carbon::yesterday();
        $page = 50;
        $result = ( new VMSAPI )->getVehicleOverDue( $date->format( 'Y-m-d' ), $page );
        $totalAmount = 0;
        foreach ( $result->Data as $value ) {
            // $resultz[] = $value;
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                // if ( $value->duetime == $date ) {
                $resultz[] = $value;
                // } else {
                //     $resultz = 'no record Found';
                // }
                $totalAmount +=  $value->needpayment;
            }
        }
        dd( $resultz );

        return view( 'overdue-payments', [ 'totalAmount' => $totalAmount, 'data' => $resultz ] );
    }

    public function criticalPayments() {
        $date = Carbon::now()->subDays( 2 )->format( 'Y-m-d' );
        $page = 50;
        $totalAmount = 0;
        $result = ( new VMSAPI )->getVehicleOverDue( $date, $page );
        foreach ( $result->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                $resultz[] = $value ;
                $totalAmount +=  $value->needpayment;
            }
        }
        return view( 'critical-payments', [ 'totalAmount' => $totalAmount, 'data' => $resultz ] );
    }

    public function codeRed() {
        $date = Carbon::now()->subDays( 5 )->format( 'Y-m-d' );
        $page = 300;
        $result = ( new VMSAPI )->getVehicleOverDue( $date, $page );
        $totalAmount = 0;
        foreach ( $result->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                $resultz[] = $value ;
                $totalAmount +=  $value->needpayment;

            }
        }

        return view( 'code-red', [ 'totalAmount' => $totalAmount, 'data' => $resultz ] );
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
        // aLlpayment
        $result = Http::get( 'https://tella.envio.africa/api/all-payment' );
        $result = json_decode( $result );
        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }
        // return $totalAmount;
        $depotx = ( new VMSAPI )->getVehicleOverDue( Carbon::yesterday()->format( 'Y-m-d' ), 1000 );
        $depot = 0;
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $weekstart ) {
                    // from sunday till today
                    $depot += $value->needpayment;
                    // $arr[] = $value->duetime ;
                }
            }
        }

        // get due payment
        $unpaidAmount = 0;
        $unpaid = $this->DuePayment();
        $unpaidAmount = $unpaid[ 'totalAmount' ];
        return array(
            'paid' => number_format( $totalAmount, 2 ),
            'unpaid' => number_format( $unpaidAmount, 2 ),
            'income' => number_format( $totalAmount + $unpaidAmount, 2 ),
            'depot' =>number_format( $depot, 2 ),
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
        $totalAmount = 0;
        foreach ( $result as $item ) {
            $totalAmount += $item->amount;
        }

        // return $totalAmount;
        $depotx = ( new VMSAPI )->getVehicleOverDue( $endDate, 300 );
        $depot = 0;
        foreach ( $depotx->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->duetime >= $startDate ) {
                    $arr[] = $value->duetime ;
                }
            }
        }
        // echo $startDate;
        // echo $endDate;
        // dd( $arr );
        // get due payment
        $unpaidAmount = 0;
        $unpaid = $this->DuePayment();
        $unpaidAmount = $unpaid[ 'totalAmount' ];

        return array(
            'paid' => number_format( $totalAmount, 2 ),
            'unpaid' => number_format( $unpaidAmount, 2 ),
            'income' => number_format( $totalAmount + $unpaidAmount, 2 ),
            'depot' =>number_format( $depot, 2 ),
        );
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
