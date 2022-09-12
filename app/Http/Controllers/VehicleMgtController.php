<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleMgtController extends Controller {

    public function index() {
        $vehicle = DB::table( 'all_vehicle' )->get();
        $nodriver  = 0;
        $a  = 0;
        $b = 0;
        $c  = 0;
        $d  = 0;
        foreach ( $vehicle as $key => $value ) {
            if ( $value->driverid == '' || $value->driverid == Null ) {
                $nodriver++;
            }
            if ( $value->status == 0 ) {
                $a++;
            }
            if ( $value->status == 4 ) {
                $b++;
            }
            if ( $value->status == 2 ) {
                $c++;
            }
            if ( $value->status == 3 ) {
                $d++;
            }
        }

        // dd( $a.  ' '  .$b. '  ' .$c .' ' . $d );
        //         Vehicle Status ( 0:Available 1:Disabled 2 ： On
        // Rental 3: On hire purchase

        // $vehicleCount = DB::table( 'all_vehicle' )->count();

        $status = DB::table( 'vehicle_status' )->get();
        $onlineDevice = DB::table( 'vehicle_status' )->where( 'offlineStatus', 'Online' )->count();
        $totalMiles = DB::table( 'vehicle_status' )->sum( 'miles' );
        // dd( $totalMiles );

        return view( 'vehicle-management', [ 'noDriver' => $nodriver,  'allVehicle' => $vehicle, 'totalMiles' => $totalMiles, 'status' => $status, 'onlineDevice' => $onlineDevice ] );
    }

    public function addVehicle() {
        // $students = json_decode( file_get_contents( storage_path() . 'public/assets//cars.json' ), true );

        // dd( $students );

        if ( Auth()->user()->user_type == 'SUPER' ) {
            $vehicleOwner = DB::table( 'user_management' )->where( 'category', 'investor' )->get();
        } else {
            $vehicleOwner = DB::table( 'user_management' )->where( 'creator_id', Auth()->user()->id )->get();
        }
        return view( 'add-vehicle', [ 'vehicleOwner' => $vehicleOwner ] );

    }

    public function vehicleInfomation() {
        return view( 'vehicle-information' );
    }

    public function addVehicle2( Request $request ) {
        dd( $request->all() );

        // Alert::success( 'Congrats', 'You\'ve Successfully Registered');
    }
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function vehicleProfile(){
        return view('vehicle-profile');
    }
    public function create() {
        //
    }
    public function fleetOperatorPermission($id){
        $userType = DB::table( 'user_type' )
        ->where("user_type_id", $id)
        ->get();

        // dd($userType);
        return view('fleet-operator-permissions',['user' => $userType ] );
    }

    public function operational( $plate ) {

        $vehicle = DB::table( 'all_vehicle' )->where( 'vehno', $plate )->first();
        $phone = $vehicle->driverphone;
        $grantor = DB::table( 'gurantors_info' )->where( 'Driver_PHONE', $phone )->first();
        // $driverInfo = DB::table( 'user_management' )->where( 'phone', $phone )->first();
        // $investorInfo = DB::table( 'user_management' )->where( 'phone', $vehicle->investorphonenumber )->first()
        $investorInfo = ( new VMSAPI )->getInvestorInfo( $vehicle->investorphonenumber );
        $driverDetails = ( new VMSAPI )->getDriverInfo( $phone );
        $vehicleDetails = ( new VMSAPI )->getVehicleRecord( $plate );
        if ( !empty( $vehicleDetails ) ) {
            $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $vehicleDetails->Data->systemno );
        }

        $car_fleet = DB::table( 'car_fleet' )->where( 'vehiclePlateNo', $plate )->first();

        $latitude = $vehicleLocation->Data[ 0 ]->Latitude;
        $longitude = $vehicleLocation->Data[ 0 ]->Longitude;

        $res =  ( new ApiController )->get( 'https://api.maptiler.com/geocoding/' . $longitude . ', ' . $latitude . '.json?key=y42GKPcp1uzNrN1f0T7N' );
        $label = $res->features[ 0 ]->place_name;

        $result = array(
            'driverDetail' => ( !empty( $driverDetails ) ) ? $driverDetails->Data : 'null',
            'driverInfo' => ( !empty( $driverInfo ) ) ? $driverInfo : 'null',
            'vehicleDetails' => ( !empty( $vehicleDetails ) ) ? $vehicleDetails->Data : 'null',
            'vehicleLocation' => ( !empty( $vehicleLocation ) ) ? $vehicleLocation->Data[ 0 ] : 'null',
            'investorInfo' => ( !empty( $investorInfo ) ) ? $investorInfo->Data : 'null',
            'garantor' => ( !empty( $grantor ) ) ? $grantor : 'null',
            'location' => ( !empty( $label ) ) ? $label : 'null',
            'carFleet' => ( !empty( $car_fleet ) ) ? $car_fleet : 'null',
        );

        // dd($result);

        return view('operational-data',['data' => $result ] );
    }

}
