<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {

        return view( 'user-management' );
    }

    public function addUser() {
        if ( Auth()->user()->user_type == 'SUPER' ) {
            $type = DB::table( 'user_type' )->get();
        } else {
            $type = DB::table( 'user_type' )->whereIn( 'user_type', [ 'Vehicle Owner', 'Driver', 'Workshop Administrator' ] )
            ->get();

        }
        return view( 'add-user', [ 'type' => $type ] );
    }

    public function userInfo() {
        return view( 'user-information' );
    }

    public function userProfile() {
        return view( 'user-profile' );
    }

    public function accountPermissions() {
        return view( 'account-permissions' );
    }

    public function adminInfo( $id ) {
        $users = DB::table( 'users' )->where( 'id', $id )->first();
        return view( 'admin-information', [ 'user' => $users ] );
    }

    public function userMgt() {
        if ( Auth()->user()->user_type == 'SUPER' ) {
            $users = DB::table( 'user_management' )->get();
        } else {
            $users = DB::table( 'user_management' )->where( 'creator_id', Auth()->user()->id )->get();
        }

        return view( 'user-management', [ 'users' => $users ] );
    }

    public function updateProfile( Request $request ) {

        // dd( $request->all() );

        DB::table( 'users' )
        ->where( 'id', Auth()->user()->id )
        ->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'company_name' => $request->company_name,
            'company_phone' => $request->company_phone,
            'company_email' => $request->company_email,
            'website' => $request->url,
            'bank_name' => $request->bank_name,
            'account_name' => $request->account_name,
            'account_number' => $request->account_number,
            'sort_code' => $request->sort_code,
            'updated_at' =>  now(),
        ] );
        return back()->with( 'success', 'Updated' );
    }

    public function createuser( Request $request ) {
        $validatedData = $request->validate( [
            'email' => 'required|email|unique:users',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'phone' => 'required',
            'location' => 'required|string',
        ] );

        // dd( $request->all() );
        $result = DB::table( 'user_type' )->where( 'user_type_id', $request->usertype )
        ->select( 'user_type', 'total_users' )->first();

        // dd( $result );
        if ( $request->usertype == 1 || $request->usertype == 2 ) {
            $id =   DB::table( 'user_management' )
            ->where( 'id', Auth()->user()->id )
            ->insertGetId( [
                'name' => $request->fname .' '.  $request->lname,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->location,
                'category' => ( $result->user_type == 'Driver' ) ? 'Driver' : 'Investor',
                'created_at' =>  now(),
            ] );
        } else {
            $id =     DB::table( 'users' )
            ->where( 'id', Auth()->user()->id )
            ->insertGetId( [
                'first_name' => $request->fname,
                'last_name' => $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->location,
                'user_type' => $result->user_type,
                'user_type_id' => $request->usertype,
                'created_at' =>  now(),
            ] );

        }

        DB::table( 'user_type' )
        ->where( 'user_type_id', $request->usertype )
        ->update( [
            'total_users' => $result->total_users + 1,
            'updated_at' => now(),
        ] );

        //    return ( new MailerController )->body();
        dispatch( new SendEmailJob( $request->email, $result->user_type, $request->usertype, $id ) );

        return back()->with( 'success', 'Success' );
    }

    public function changePasswordz( Request $request ) {
        $this->validate( $request, [
            'password' => [ 'required', 'string', 'min:8', 'confirmed' ],
            'pin' => [ 'required', 'string', 'min:4', 'confirmed' ],
        ] );

        $ID = Crypt::decrypt( $request->tok );
        // dd( $request->all() );
        $app = DB::table( 'users' )
        ->where( 'user_id', $ID )
        ->update( [
            'status' => '1',
            'password' => Hash::make( $request->password ),
            'pin' => $request->pin,
        ] );
        if ( $app ) {
            return redirect( '/login' )->with( 'message', 'Profile updated! Please Login' );
        } else {
            return back()->with( 'Emessage', 'Error Updating Profile' );
        }
    }
    // public function changePassword( Request $request )
    // {
    //     $id = '6434819';
    //     $pass = DB::table( 'users' )->where( [ 'user_id' => $id, 'status' => '0' ] )->first();
    //     // dd( $pass );
    //     $user_id =  Crypt::encrypt( $id );

    //     return view( '/change_password', [ 'pass' => $pass, 'id' => $user_id ] );
    // }

    public function assignPassword( $id ) {
        // $ID = Crypt::decrypt( $id );
        $ID = 4;

        dd( 'hello' );
        $pass = DB::table( 'users' )->where( [ 'user_id' => $ID, 'status' => '1', 'verify' => '0' ] )->first();
        if ( $pass ) {
            $user_id =  Crypt::encrypt( $ID );
            return view( '/change_password', [ 'pass' => $pass, 'id' => $user_id ] );
        } else {
            // return route( 'login' );
            return redirect( '/login' )->with( 'status', 'Profile updated! Please Login' );
        }

    }
}
