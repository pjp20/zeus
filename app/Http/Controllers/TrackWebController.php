<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class TrackWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapKey ="AIzaSyDU4Y93R7fYLIWL1y96D5n7zCDZ94rMcus";
        // $cars = DB::table('all_vehicle')->orderBy('vehno', 'DESC')->get();
     $cars = DB::table('vehicle_status')->join('all_vehicle', 'all_vehicle.vehno', 'vehicle_status.vehno')->get();
      $cars3 = DB::table('vehicle_status')->join('all_vehicle', 'all_vehicle.vehno', 'vehicle_status.vehno')->get()->toArray();

     $response =  ( new ApiController )->get("https://maps.googleapis.com/maps/api/geocode/json?latlng=".$cars[0]->latitude.",".$cars[0]->longitude."&key=".$mapKey."");
     $placeAddress = $response->results[0]->formatted_address;
     //details from mygarage
      $otherDetails = ( new ApiController )->get("https://test.mygarage.africa/api/other-details/bwr749fd");
// $otherDetails->remittanceAmount;
        $plate = $cars[0]->vehno;
        $investorphone = $cars[0]->investorphonenumber;
        $driverphone = $cars[0]->driverphone;
        $vehicleDetails = ( new VMSAPI )->getVehicleRecord( $plate );
        if ( !empty( $vehicleDetails ) ) {
            $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $vehicleDetails->Data->systemno );
        }
          $driverDetails = ( new VMSAPI )->getDriverInfo( $driverphone );

        $investorInfo = ( new VMSAPI )->getInvestorInfo( $investorphone );
    //    $cars3 =  $cars->toArray();
        $data = array(
            'cars'=> $cars,
            'driverDetail' => ( !empty( $driverDetails ) ) ? $driverDetails->Data : 'null',
            'vehicleDetails' => ( !empty( $vehicleDetails ) ) ? $vehicleDetails->Data : 'null',
            'vehicleLocation' => ( !empty( $vehicleLocation ) ) ? $vehicleLocation->Data[ 0 ] : 'null',
            'investorInfo' => ( !empty( $investorInfo ) ) ? $investorInfo->Data : 'null',
        );
        // return view( 'track-web', [ 'data' => $data ] );

        return view('track-web', compact('cars', 'data', 'cars3', 'otherDetails', 'placeAddress'));
    }

    public function index2($plateNo)
    {
        // $cars = DB::table('all_vehicle')->orderBy('vehno', 'DESC')->get();
     $cars = DB::table('vehicle_status')->join('all_vehicle', 'all_vehicle.vehno', 'vehicle_status.vehno')->get();
     $cars = DB::table('vehicle_status')->join('all_vehicle', 'all_vehicle.vehno', 'vehicle_status.vehno')->where('vehicle_status.vehno', $plateNo)->first();

   return  $result =  ( new ApiController )->get("https://maps.googleapis.com/maps/api/geocode/json?latlng=".$cars[0]->latitude.",".$cars[0]->longitude."&key=".$mapKey."");

        $plate = $cars2->vehno;
        $investorphone = $cars2->investorphonenumber;
        $driverphone = $cars2->driverphone;
        $vehicleDetails = ( new VMSAPI )->getVehicleRecord( $plate );
        if ( !empty( $vehicleDetails ) ) {
            $vehicleLocation = ( new VMSAPI )->getVehiclePosition( $vehicleDetails->Data->systemno );
        }
        $driverDetails = ( new VMSAPI )->getDriverInfo( $driverphone );

        $investorInfo = ( new VMSAPI )->getInvestorInfo( $investorphone );
        $data = array(
            'cars'=> $cars,
            'cars2'=> $cars2,
            'driverDetail' => ( !empty( $driverDetails ) ) ? $driverDetails->Data : 'null',
            'vehicleDetails' => ( !empty( $vehicleDetails ) ) ? $vehicleDetails->Data : 'null',
            'vehicleLocation' => ( !empty( $vehicleLocation ) ) ? $vehicleLocation->Data[ 0 ] : 'null',
            'investorInfo' => ( !empty( $investorInfo ) ) ? $investorInfo->Data : 'null',
        );
        // return view( 'track-web', [ 'data' => $data ] );

        return view('track-web', compact('cars', 'data','cars2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
