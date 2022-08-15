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
        // $users = DB::table( 'user_management' )->where("category")->get();

        $driver = 0;
        foreach ($users as $key => $value) {
            if($value->category == "Driver"){
                $driver++;
            }
        }
        return view( 'user-management',['users' => $users, "driverCount" => $driver] );
    }

}
