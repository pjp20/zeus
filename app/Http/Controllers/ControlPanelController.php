<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ControlPanelController extends Controller {

    public function index() {
        $package = DB::table( 'maintenancefee' )->get();
        $maintenace = DB::table( 'maintenace_cost' )
        ->join( 'package', 'package.package_id', 'maintenace_cost.package_id' )
        ->join( 'users', 'users.id', 'maintenace_cost.fleet_id' )
        // ->join( 'users', 'users.id', 'maintenace_cost.workshop_id' )
        ->select( 'maintenace_cost.*', 'package.package_name', 'users.first_name', 'users.last_name' )
        ->get();

        // dd( $maintenace );

        $package = DB::table( 'package' )->get();
        $userType = DB::table( 'user_type' )->get();

        $user = DB::table( 'users' )
        ->join( 'user_type', 'user_type.user_type_id', 'users.user_type_id' )
        ->get();

        return view( 'control-panel', [ 'package' => $package, 'users' => $user, 'package'=>$package, 'userType' => $userType, 'maintenace' => $maintenace ] );
    }

    public function maintenance( Request $request ) {
        // dd( $request->all() );
        $validatedData = $request->validate( [
            'fleet' => 'required',
            'package' => 'required',
            'payee' => 'required',
            'amount' => 'required',
        ] );

        $result =   DB::table( 'maintenace_cost' )->insert( [
            'user_id'=>Auth()->user()->id,
            'reference'=>date( 'Ymdhi' ).rand( 000, 999 ),
            'fleet_id'=>$request->fleet,
            'package_id'=>$request->package,
            'payee'=>$request->payee,
            'workshop_id'=>$request->workshop,
            'amount'=>$request->amount,
            'created_at'=>now(),

        ], );
        if ( $result ) {
            return back()->with( 'success', 'Success' );
        } else {
            return back()->with( 'Emessage', 'Failed' );
        }
    }

    public function newAcctPermission() {
        $permission = DB::table( 'permission_overview' )->get();
        // $permission = $permission->get();
        // dd( $permission );

        $fleet = DB::table( 'permission_overview' )->where( 'name', 'Fleet/Vehicle Management' )->select( 'list' )->first();
        $fleet = json_decode( $fleet->list );

        $payment = DB::table( 'permission_overview' )->where( 'name', 'Payment & Commission' )->select( 'list' )->first();
        $payment = json_decode( $payment->list );

        $finance = DB::table( 'permission_overview' )->where( 'name', 'Finance & Wallet' )->select( 'list' )->first();
        $finance = json_decode( $finance->list );

        $reporting = DB::table( 'permission_overview' )->where( 'name', 'Reporting & Activity Log' )->select( 'list' )->first();
        $reporting = json_decode( $reporting->list );

        // $fleet = DB::table( 'permission_overview' )->where( 'name', 'Fleet/Vehicle Management' )->select( 'list' )->first();
        // $fleet = json_decode( $fleet->list );

        // {
        //     'shareCommission': {
        // 'percentage': 15}
        // ,
        //     'remittanceDeposite': {
        //       'generalRemittance' : 75,
        //       'maintenanceContribution' : 2,
        //       'AccountCommission' : 15,
        //       'unionFee' : 3
        //     }
        // ,
        //     'enableSoftPurse': {
        //       'purseCount' : 1
        //     }
        // ,
        //     'allowUserAccountAddEditAgentCommsion': {
        //       'agentCommission': 4
        //     }

        // foreach ( $variable as $key => $value ) {
        //     # code...
        // }
        // //   }

        // dd( $payment->shareCommission->percentage );

        return view( 'new-account-permissions', [ 'permission' => $permission, 'fleet' =>  $fleet, 'payment' => $payment, 'finance' => $finance, 'reporting' => $reporting ] );
    }

    public function UpdateNewAcctPermission( Request $request ) {
        dd( $request->all() );

        // if ( $request->password === Auth()->user()->pin ) {

        $fleet = array(
            'addVehicleFleet' => ( $request->addVehicle ) ? 1 : 0,
            'assignVehicleDriver' => ( $request->assignVehicleDriver ) ? 1 : 0,
            'addWorkshopFleet' => ( $request->addWorkshop ) ? 1 : 0,
            'EditDeleteWorkshop' => ( $request->editDeleteWorkshop ) ? 1 : 0,
            'createUserAccount' => ( $request->createUser ) ? 1 : 0,
            'EditDeleteUserAccount' => ( $request->editDeleteUser ) ? 1 : 0,
            'assignVehicleWorkshop' => ( $request->assignVehicleWorkshop ) ? 1 : 0,
        );

        $payment =  array(
            'shareCommission' =>  ( $request->enableShareCommission == 'on' ) ? array( 'percentage' => ( $request->shareCommissionValue ) ? $request->shareCommissionValue  : 0 ) : 0,
            'remittanceDeposite' => array(
                'generalRemittance' => $request->generalRemittance ?? 0,
                'maintenanceContribution' => $request->maintenanceContribution ?? 0,
                'AccountCommission' => $request->AccountCommission ?? 0,
                'unionFee' => $request->unionFee ?? 0,
            ),
            'enableSoftPurse' =>  array( 'purseCount' =>  ( $request->enableSoftpurse == 'on' ) ? $request->softpurseCount : 0 ),
            'allowUserAccountAddEditAgentCommsion' =>  array( 'agentCommission' =>  ( $request->enableUserAddEditAgentCommission == 'on' ) ? $request->userAddEditAgentCommission : 0 ),
        );

        $finance =  array(
            'makeWalletTop' => ( $request->makeWalletTop ) ? 1 : 0,
            'requestWalletWithdrawal' => ( $request->requestWalletWithdrawal ) ? 1 : 0,
        );

        $reporting =  array(
            'allowUserDownload' => ( $request->allowUserDownload ) ? 1 : 0,
            'allowUserWithdrawal' => ( $request->allowUserWithdrawal ) ? 1 : 0,
        );
        // dd( json_encode( $reporting ) );

        // fleet
        // 'addVehicleFleet':1, 'assignVehicleDriver':1, 'addWorkshopFleet':0, 'EditDeleteWorkshop':1, 'createUserAccount':0, 'EditDeleteUserAccount':0, 'assignVehicleWorkshop':1}
        // payment
        // { "shareCommission": {"percentage": 15},"remittanceDeposite": {"generalRemittance" : 75,"maintenanceContribution" : 2,"AccountCommission" : 15,"unionFee" : 3},"enableSoftPurse": {"purseCount" : 1},"allowUserAccountAddEditAgentCommsion": {"agentCommission": 4}}
        // {"shareCommission":{"percentage":"15"},"remittanceDeposite":{"generalRemittance":"75","maintenanceContribution":0,"AccountCommission":0,"unionFee":0},"enableSoftPurse":{"purseCount":"1"},"allowUserAccountAddEditAgentCommsion":{"allowUserAccountAddEditAgentCommsion":"4"}}
        // finance
        // {"makeWalletTop": 1,"requestWalletWithdrawal": 1}
        // reporting
        // {"allowUserDownload": 1,"allowUserWithdrawal": 1}

        //     // }
        DB::table( 'permission_overview' )
        ->where( 'name', 'Fleet/Vehicle Management' )->update( [
            'list'=> json_encode( $fleet ),
        ], );

        DB::table( 'permission_overview' )
        ->where( 'name', 'Payment & Commission' )->update( [
            'list'=> json_encode( $payment ),
        ], );
        DB::table( 'permission_overview' )
        ->where( 'name', 'Finance & Wallet' )->update( [
            'list'=> json_encode( $finance ),
        ], );
        DB::table( 'permission_overview' )
        ->where( 'name', "Reporting & Activity Log" )->update( [
            'list'=> json_encode( $reporting ),
        ], );

return back()->with("suceess","updated successfuly");

        // {
        //   'allowUserDownload': 1,
        //   'allowUserWithdrawal': 1
        // }

        // dd( $reporting );

    }

    public function maintenanceFee( Request $request ) {
        // return $request;
        $ins = DB::table( 'maintenancefee' )->insert( [
            'packageTitle'=>$request->packageType,
            'payee'=>$request->payee,
            'currency'=>$request->currency,
            'workshop'=>$request->workshop,
            'amount'=>$request->amount,

        ], );
        $package = DB::table( 'maintenancefee' )->get();
        return view( 'control-panel', [ 'package'=>$package ] );
    }

    public function fetchMaintenance( $package ) {
        $package = DB::table( 'maintenancefee' )->where( 'packageTitle', $package )->first();
        if ( $package == null ) {
            return [ 'response'=> 'package not found', 'statusCode'=>402 ];
        }
        return  [ 'package'=>$package ];
    }

    public function maintenanceEdit( Request $request ) {
        // return $request;
        $ins = DB::table( 'maintenancefee' )->where( 'id', $request->id )->update( [
            'packageTitle'=>$request->packageType,
            'payee'=>$request->payee,
            'workshop'=>$request->workshop,
            'amount'=>$request->amount,
        ], );
        $package = DB::table( 'maintenancefee' )->get();
        return view( 'control-panel', [ 'package'=>$package ] );
    }

    public function deleteMaintence( $id ) {
        // return $request;
        $del = DB::table( 'maintenancefee' )->where( 'id', $id )->delete();
        return redirect()->back();
    }

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
