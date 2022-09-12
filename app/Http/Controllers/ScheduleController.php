<?php

namespace App\Http\Controllers\Task;

// use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller {

    public function all() {

        // $this->diff( $time );

        // return  $now = Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString();
        $this->userManagement();
        $this->reportTask();
        $this->allVehicleTask();
        $this->TellaPayment();
        //  $this->vehicleStatusTask();
    }

    public function reportTask() {
        $sql = DB::table( 'duepayments' )->truncate();
        // $date = Carbon::tomorrow()->startOfDay();
        $date = Carbon::now()->endOfWeek( Carbon::SATURDAY );
        $page = 10000;
        $result = ( new VMSAPI )->getVehicleOverDue( $date->format( 'Y-m-d' ), $page );
        foreach ( $result->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->Vehicle->drivername != '' || $value->Vehicle->investorname != '0000000000' ) {
                    if ( $value->Vehicle->driverphone != '' || $value->Vehicle->driverphone != null ) {
                        DB::table( 'duepayments' )->insert(
                            [
                                'investorname' => $value->Vehicle->investorname,
                                'investoremail' => ( !empty( $value->Vehicle->investoremail ) ) ? $value->Vehicle->investoremail : 'empty',
                                'investorphone' => ( !empty( $value->Vehicle->investorphone ) ) ? $value->Vehicle->investorphone : 'empty',
                                'drivername' => $value->Vehicle->drivername,
                                'driveremail' => $value->Vehicle->driveremail,
                                'driverphone' => $value->Vehicle->driverphone,
                                'vehid' => $value->Vehicle->vehid,
                                'vehno' => ( !empty( $value->Vehicle->vehno ) ) ? $value->Vehicle->vehno : 'empty',
                                'systemno' => $value->Vehicle->systemno,
                                'simid' => $value->Vehicle->simid,
                                'imei' => $value->Vehicle->imei,
                                'enginecapacityid' => $value->Vehicle->enginecapacityid,
                                'enginecapacityname' => $value->Vehicle->enginecapacityname,
                                'fueltypeid' => $value->Vehicle->fueltypeid,
                                'fueltypename' => $value->Vehicle->fueltypename,
                                'bodytypeid' => $value->Vehicle->bodytypeid,
                                'bodytypename' => $value->Vehicle->bodytypename,
                                'brandid' => $value->Vehicle->brandid,
                                'brandname' => $value->Vehicle->brandname,
                                'colorid' => $value->Vehicle->colorid,
                                'colorname' => $value->Vehicle->colorname,
                                'price' => $value->Vehicle->price,
                                'status' => $value->Vehicle->status,
                                'v_createtime' => $value->Vehicle->createtime,
                                'expirdate' => $value->Vehicle->expirdate,
                                'investorid' => $value->Vehicle->investorid,
                                'orderid' => $value->orderid,
                                'needpayment' => $value->needpayment,
                                'rentalprice' => $value->rentalprice,
                                'outstanding' => $value->outstanding,
                                'duetime' => $value->duetime,
                                'createtime' => $value->createtime,
                                'created_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                            ]
                        );
                        // $totalAmount +=  $value->needpayment;
                    }
                }
            }
        }
    }

    public function allVehicleTask() {
        $sql = DB::table( 'all_vehicle' )->truncate();

        $result = ( new VMSAPI )->All_record();
        // return $result;

        foreach ( $result->Data as $value ) {
            if ( $value->investorname != '' || $value->investorname != null ) {
                if ( $value->drivername != '' || $value->investorname != '0000000000' ) {
                    // if ( $value->driverphone != '' || $value->driverphone != null ) {
                    if ( $value->systemno != '0000000000' ) {

                        DB::table( 'all_vehicle' )->insert(
                            [
                                'vehno' => $value->vehno,
                                'systemno' => $value->systemno,
                                'simid' => $value->simid,
                                'bodytypename' => $value->bodytypename,

                                'colorname' => $value->colorname,
                                'price' => $value->price,
                                'status' => $value->status,

                                'brandname' => $value->brandname,
                                'createtime' => $value->createtime,
                                'expirdate' => $value->expirdate,
                                'investorid' => $value->investorid,
                                'investorname' => $value->investorname,
                                'investorphonenumber' => $value->investorphonenumber,
                                'investoremail' => $value->investoremail,
                                'driverid' => $value->driverid,
                                'drivername' => $value->drivername,
                                'driverphone' => $value->driverphone,
                                'driveremail' => $value->driveremail,
                                'created_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                            ]
                        );
                    }
                    // }
                }
            }
        }
    }

    public function vehicleStatusTask() {
        // $sql = DB::table( 'vehicle_status' )->truncate();

        $result = DB::table( 'all_vehicle' )->get();
        foreach ( $result as $value ) {
            # code...
            if ( $value->systemno != '13306015202' ) {
                if ( $value->systemno != '13071241601' ) {
                    if ( $value->systemno != '13393420095' ) {
                        $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $value->systemno );
                        if ( $vehicleLocation != '' || $vehicleLocation != null ) {
                            if ( $vehicleLocation->Data != '' || $vehicleLocation->Data != null ) {
                                $result = $vehicleLocation->Data[ 0 ];
                                //getting yesterday miles
                                $dst = DB::table( 'vehicle_status' )->where( 'systemno', $value->systemno )->first();
                                $todayMiles = $result->Miles - $dst->yesterdayMiles;
                                // $result = $vehicleLocation->Data[ 0 ];
                                $time = $result->Time;

                                $time = Carbon::parse( $time )->format( 'Y-m-d H:i:s' );

                                $new = $this->diff( $time );

                                if ( $new[ 'response' ] == true && $new[ 'time' ] > 0 && $new[ 'time' ] < 6 ) {
                                    // return [ 'response' => true ];
                                    $stat = 'Online';

                                } else {
                                    $stat = 'Offline';
                                }
                                // return $value->systemno . $stat;

                                // DB::table( 'vehicle_status' )->updateOrInsert(
                                // if ( $dst->yesterdayMiles < 1 ) {
                                DB::table( 'vehicle_status' )->upsert(
                                    [
                                        'systemno' => $value->systemno,
                                        'vehno' => $value->vehno,
                                        'fleet' => $value->bodytypename,
                                        'createtime' => $value->createtime,
                                        'time' => $result->Time,
                                        'longitude' => $result->Longitude,
                                        'latitude' => $result->Latitude,
                                        'velocity' => $result->Velocity,
                                        'Dtstatus' => $result->DtStatus,
                                        'locate' => $result->Locate,
                                        'miles' => $result->Miles,
                                        'todayMiles' => $todayMiles,
                                        'yesterdayMiles' => $result->Miles,
                                        'offlineStatus' => $stat,
                                        'created_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                                    ], 'systemno', [
                                        'time' => $result->Time,
                                        'longitude' => $result->Longitude,
                                        'latitude' => $result->Latitude,
                                        'velocity' => $result->Velocity,
                                        'Dtstatus' => $result->DtStatus,
                                        'locate' => $result->Locate,
                                        'todayMiles' => $todayMiles,

                                        'yesterdayMiles' => $result->Miles,
                                        'miles' => $result->Miles,
                                        'offlineStatus' => $stat,
                                        'updated_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                                    ]
                                );
                                // }

                            } else {
                                DB::table( 'error_table' )->insert(
                                    [
                                        'systemno' => $value->systemno,
                                        'error_details' => $vehicleLocation->Data,
                                        'created_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                                    ]
                                );
                            }
                        }
                    }
                }

            }
        }

    }

    public function check( $no ) {
        return $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $no );
    }

    public function userManagement() {
        DB::table( 'user_management' )->truncate();
        $users = ( new ApiController )->get( 'http://test.mygarage.africa/api/user-record' );
        foreach ( $users as $value ) {
            DB::table( 'user_management' )->insert(
                [
                    'user_id' => $value->id,
                    'name' => $value->name,
                    'email' => $value->email,
                    'phone' => ( !empty( $value->phone ) ) ? $value->phone : 'empty',
                    'password' => $value->password,
                    'password2' => $value->password2,
                    'account' => $value->account,
                    'address' => $value->address,
                    'town' => $value->town,
                    'gender' => $value->gender,
                    'package' => $value->package,
                    'acctBal' => $value->acctBal,
                    'image' => $value->image,
                    'category' => $value->category,
                    'accountNumber' => $value->accountNumber,
                    'sortCode' => $value->sortCode,
                    'driverId' => $value->driverId,
                    'transactionPin' => $value->transactionPin,
                    'nin' => $value->nin,
                    'dob' => $value->dob,
                    'refferral' => $value->referral,
                    'defaultCar' => $value->defaultCar,
                    'tracking' => $value->tracking,
                    'repairFinancing' => $value->repairFinancing,
                    'bolt' => $value->bolt,
                    'insurance' => $value->insurance,
                    'created_at' => $value->created_at,
                    'updated_at' => $value->updated_at,
                ]
            );
        }

    }

    public function TellaPayment() {
        DB::table( 'tella_payment' )->truncate();
        $users = ( new ApiController )->get( 'https://tella.envio.africa/api/all-payment' );
        foreach ( $users as $value ) {
            DB::table( 'tella_payment' )->insert(
                [
                    'user_id' => $value->user_id,
                    'agentId' => $value->agentId,
                    'agentName' => $value->agentName,
                    'agentEmail' => $value->agentEmail,
                    'agentPhone' => $value->agentPhone,
                    'driverName' => $value->driverName,
                    'driverPhone' => $value->driverPhone,
                    'driverEmail' => $value->driverEmail,
                    'ownerName' => $value->ownerName,
                    'ownerEmail' => $value->ownerEmail,
                    'ownerPhone' => $value->ownerPhone,
                    'vehiclePlateNo' => $value->vehiclePlateNo,
                    'amount' => $value->amount,
                    'status' => $value->status,
                    'note' => $value->note,
                    'receiptImage' => $value->receiptImage,
                    'paymentMethod' => $value->paymentMethod,
                    'reference' => $value->reference,
                    'year' => $value->year,
                    'month' => $value->month,
                    'week' => $value->week,
                    'day' => $value->day,
                    'investorName' => $value->investorName,
                    'acctNumber' => $value->acctNumber,
                    'sortCode' => $value->sortCode,
                    'debitAccount' => $value->debitAccount,
                    'vehicle' => $value->vehicle,
                    'percentage' => $value->percentage,
                    'created_at' => $value->created_at,
                    'updated_at' => $value->updated_at,
                ]
            );
        }

    }

    public static function diff( $time ) {
        $now = Carbon::now();
        $now = Carbon::parse( $now )->timezone( 'Africa/Lagos' )->toDateTimeString();
        $todayMonth = Carbon::parse( $now )->format( 'F' );
        $todayDay = Carbon::parse( $now )->format( 'l' );
        $todayYear = Carbon::parse( $now )->format( 'Y' );
        $todayHour = Carbon::parse( $now )->format( 'H' );
        $todayMinutes = Carbon::parse( $now )->format( 'i' );

        $vmsMonth = Carbon::parse( $time )->format( 'F' );
        $vmsDay = Carbon::parse( $time )->format( 'l' );
        $vmsYear = Carbon::parse( $time )->format( 'Y' );
        $vmsHour = Carbon::parse( $time )->format( 'H' );
        $vmsMinutes = Carbon::parse( $time )->format( 'i' );

        if ( $todayYear == $vmsYear ) {
            if ( $todayMonth == $vmsMonth ) {
                if ( $todayDay == $vmsDay ) {
                    if ( $todayHour == $vmsHour ) {

                        $diff = $todayMinutes - $vmsMinutes;
                        return [ 'response' => true, 'time' => $diff ];

                    }

                }
            }
        }

        return [ 'response' => false, 'time' => -30 ];
    }

    public function fetchTellaTransaction() {
        $result = DB::table( 'transaction_number' )
        ->where( 'api', 'Tella' )
        ->select( 'lastnumber' )
        ->first();
        // return $result;
        $content = array(
            'id' => $result->lastnumber,
        );
        $curl = curl_init();
        curl_setopt_array( $curl, array(
            CURLOPT_URL => 'https://tella.envio.africa/api/transactions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>  $content ,
        ) );
        $response = curl_exec( $curl );
        $response = json_decode( $response );
        curl_close( $curl );
        foreach ( $response as $key => $value ) {
            DB::table( 'transactions' )->upsert(
                [
                    'user_id' => $value->user_id,
                    'agentId' => $value->agentId,
                    'agentName' => $value->agentName,
                    'agentEmail' => $value->agentEmail,
                    'agentPhone' => $value->agentPhone,
                    'driverName' => $value->driverName,
                    'driverPhone' => $value->driverPhone,
                    'driverEmail' => $value->driverEmail,
                    'ownerName' => $value->ownerName,
                    'ownerEmail' => $value->ownerEmail,
                    'ownerPhone' => $value->ownerPhone,
                    'vehiclePlateNo' => $value->vehiclePlateNo,
                    'amount' => $value->amount,
                    'status' => $value->status,
                    'note' => $value->note,
                    'receiptImage' => $value->receiptImage,
                    'paymentMethod' => $value->paymentMethod,
                    'reference' => $value->reference,
                    'year' => $value->year,
                    'month' => $value->month,
                    'week' => $value->week,
                    'day' => $value->day,
                    'created_at' => $value->created_at,
                ], 'reference', [
                    'updated_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                ]
            );
            $result = DB::table( 'transaction_number' )
            ->where( 'api', 'Tella' )
            ->select( 'lastnumber' )
            ->first();
            DB::table( 'transaction_number' )
            ->where( 'api', 'Tella' )
            ->update( [
                'lastnumber' => $result->lastnumber + 1,
            ] );
        }
    }

    public function fetchMygarageTransaction() {
        $result = DB::table( 'transaction_number' )
        ->where( 'api', 'Mygarage' )
        ->select( 'lastnumber' )
        ->first();
        $content = array(
            'id' => $result->lastnumber,
        );
        $curl = curl_init();
        curl_setopt_array( $curl, array(
            CURLOPT_URL => 'https://test.mygarage.africa/api/transactions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>  $content ,
        ) );
        $response = curl_exec( $curl );
        $response = json_decode( $response );
        curl_close( $curl );
        return $response;
        foreach ( $response as $key => $value ) {
            DB::table( 'transactions' )->upsert(
                [
                    'user_id' => $value->userId,
                    'agentId' => $value->agentId,
                    'agentName' => $value->agentName,
                    'agentEmail' => $value->agentEmail,
                    'agentPhone' => $value->agentPhone,
                    'driverName' => $value->driverName,
                    'driverPhone' => $value->driverPhone,
                    'driverEmail' => $value->driverEmail,
                    'ownerName' => $value->ownerName,
                    'ownerEmail' => $value->ownerEmail,
                    'ownerPhone' => $value->ownerPhone,
                    'vehiclePlateNo' => $value->vehiclePlateNo,
                    'amount' => $value->amount,
                    'status' => $value->status,
                    'note' => $value->note,
                    'receiptImage' => $value->receiptImage,
                    'paymentMethod' => $value->paymentMethod,
                    'reference' => $value->reference,
                    'year' => $value->year,
                    'month' => $value->month,
                    'week' => $value->week,
                    'day' => $value->day,
                    'created_at' => $value->created_at,
                ], 'reference', [
                    'updated_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                ]
            );
            $result = DB::table( 'transaction_number' )
            ->where( 'api', 'Mygarage' )
            ->select( 'lastnumber' )
            ->first();
            DB::table( 'transaction_number' )
            ->where( 'api', 'Mygarage' )
            ->update( [
                'lastnumber' => $result->lastnumber + 1,
            ] );
        }

    }

    public function finance() {
     return   $this->fetchMygarageTransaction();
        // $this->fetchTellaTransaction();
    }

    public function vms_payment() {

        $result = DB::table( 'transaction_number' )
        ->where( 'api', 'vms' )
        ->select( 'lastnumber' )
        ->first();
        $result = DB::table( 'all_vehicle' )->where( 'id', '>=', $result->lastnumber )->select( 'vehno' )->get();
        foreach ( $result as $item ) {
            $results = ( new VMSAPI )->get_pay_bill( $item->vehno );
            // $results = ( new VMSAPI )->get_pay_bill( 'EFR882SN' );
            // $results = json_decode( $results );
            // return $results;
            // $arr[] = $results;
            if ( $results ) {
                if ( $results->Data != null ) {
                    foreach ( $results->Data->leasePay as $value ) {
                        DB::table( 'vms_payments' )->upsert(
                            [
                                'userid' => $results->Data->userid,
                                'vehno' => $results->Data->vehno,
                                'nickname' => $results->Data->nickname,
                                'vehid' => $results->Data->vehid,
                                'systemno' => $results->Data->systemno,
                                'type' => 'leasepay',
                                'orderid' => $value->orderid,
                                'needpayment' => $value->needpayment,
                                'createtime' => $value->createtime,
                                'created_at' => now(),
                            ], 'orderid', [
                                'updated_at' => Carbon::parse( now() )->timezone( 'Africa/Lagos' )->toDateTimeString(),
                            ]
                        );
                    }
                }
            }
            $result = DB::table( 'transaction_number' )
            ->where( 'api', 'vms' )
            ->select( 'lastnumber' )
            ->first();
            DB::table( 'transaction_number' )
            ->where( 'api', 'vms' )
            ->update( [
                'lastnumber' => $result->lastnumber + 1,
            ] );
        }
        // return $arr;

    }

}
