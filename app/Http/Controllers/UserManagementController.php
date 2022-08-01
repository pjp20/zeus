<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view( 'add-user' );
    }

    public function userInfo() {
        return view( 'user-information' );
    }

    public function userProfile() {
        return view( 'user-profile' );
    }

    public function userMgt() {

        $users = DB::table( 'user_management' )->get();
        // dd( $users );
        // $response = Http::get( 'http://test.mygarage.africa/api/user-record' );
        // $users = json_decode( $response->body() );

        return view( 'user-management', compact( 'users' ) );
    }

}
