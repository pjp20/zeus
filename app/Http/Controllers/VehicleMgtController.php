<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\DB;

class VehicleMgtController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $vehicle = DB::table( 'all_vehicle' )->get();
        $nodriver  = 0;
        foreach ( $vehicle as $key => $value ) {
            if ( $value->driverid == '' || $value->driverid == Null ) {
                $nodriver++;
            }
        }
        // dd( $nodriver );


        // $vehicleCount = DB::table( 'all_vehicle' )->count();

        $status = DB::table( 'vehicle_status' )->get();
        $onlineDevice = DB::table( 'vehicle_status' )->where( 'Dtstatus', 1 )->count();
        $totalMiles = DB::table( 'vehicle_status' )->sum( 'miles' );
        // dd( $totalMiles );

        return view( 'vehicle-management', [ 'noDriver' => $nodriver,  'allVehicle' => $vehicle, 'totalMiles' => $totalMiles, 'status' => $status, 'onlineDevice' => $onlineDevice ] );
    }
    public function addVehicle(){
        return view('add-vehicle');
    }
    public function vehicleInfomation(){
        return view('vehicle-information');
    }
    public function addVehicle2(){
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
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
}
