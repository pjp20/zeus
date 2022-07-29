<?php

namespace App\Http\Controllers\Task;

// use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller {

    public function all() {
        $this->vehicleStatusTask();
    }

    public function reportTask() {
        $sql = DB::table( 'duepayments' )->truncate();

        $date = Carbon::tomorrow()->startOfDay();
        $page = 1000;
        $result = ( new VMSAPI )->getVehicleOverDue( $date->format( 'Y-m-d' ), $page );
        foreach ( $result->Data as $value ) {
            if ( $value->Vehicle->investorname != '' || $value->Vehicle->investorname != null ) {
                if ( $value->Vehicle->drivername != '' || $value->Vehicle->investorname != '0000000000' ) {
                    if ( $value->Vehicle->driverphone != '' || $value->Vehicle->driverphone != null ) {

                        DB::table( 'duepayments' )->insert(
                            [
                                'investorname' => $value->Vehicle->investorname,
                                'investoremail' => $value->Vehicle->investoremail,
                                'investorphone' => $value->Vehicle->investorphone,
                                'drivername' => $value->Vehicle->drivername,
                                'driveremail' => $value->Vehicle->driveremail,
                                'driverphone' => $value->Vehicle->driverphone,
                                'vehid' => $value->Vehicle->vehid,
                                'vehno' => $value->Vehicle->vehno,
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
                                'v_createtime' =>  $value->Vehicle->createtime,
                                'expirdate' =>  $value->Vehicle->expirdate,
                                'investorid' => $value->Vehicle->investorid,
                                'orderid' => $value->orderid,
                                'needpayment' => $value->needpayment,
                                'rentalprice' => $value->rentalprice,
                                'outstanding' => $value->outstanding,
                                'duetime' =>  $value->duetime,
                                'createtime' =>  $value->createtime,
                                'created_at' => now(),
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
        foreach ( $result->Data as $value ) {
            if ( $value->investorname != '' || $value->investorname != null ) {
                if ( $value->drivername != '' || $value->investorname != '0000000000' ) {
                    if ( $value->driverphone != '' || $value->driverphone != null ) {
                        if ( $value->systemno != '0000000000' ) {
                            DB::table( 'all_vehicle' )->insert(
                                [
                                    'vehno' => $value->vehno,
                                    'systemno' => $value->systemno,
                                    'created_at' => now(),
                                ]
                            );
                        }
                    }
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
                $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $value->systemno );
                if ( $vehicleLocation != '' || $vehicleLocation != null ) {

                    $result = $vehicleLocation->Data[ 0 ];
                    // DB::table( 'vehicle_status' )->updateOrInsert(
                    DB::table( 'vehicle_status' )->upsert(
                        [
                            'systemno' => $value->systemno,
                            'time' => $result->Time,
                            'longitude' => $result->Longitude,
                            'latitude' => $result->Latitude,
                            'velocity' => $result->Velocity,
                            'Dtstatus' => $result->DtStatus,
                            'locate' => $result->Locate,
                            'miles' => $result->Miles,
                            'created_at' => now(),
                        ], 'systemno', [
                            'time' => $result->Time,
                            'longitude' => $result->Longitude,
                            'latitude' => $result->Latitude,
                            'velocity' => $result->Velocity,
                            'Dtstatus' => $result->DtStatus,
                            'locate' => $result->Locate,
                            'miles' => $result->Miles,
                            'updated_at' => now()
                        ]
                    );
                }
            }
        }

    }
}
