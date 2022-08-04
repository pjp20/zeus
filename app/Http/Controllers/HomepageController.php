<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        return view( 'home' );
    }

    public function user( $phone ) {
        $user = DB::table( 'user_management' )->where( 'phone', $phone )->first();
        return view( 'user', [ 'user' => $user ] );
    }

    public function editUserAccount( Request $request ) {
        // dd( $request->all() );

        $content = array(
            'email' =>  $request->email,
            'name' =>  $request->name,
            'phone' =>  $request->phone,
            'category' => $request->category,
            'town' =>  $request->town,
            'address' =>  $request->address,
            'nin' =>  $request->nin,
            'dob' =>  $request->dob
        );
        $curl = curl_init();
        curl_setopt_array( $curl, array(
            CURLOPT_URL => 'https://test.mygarage.africa/api/edit-user-record',
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
        curl_close( $curl );
        if ( $response == 1 ) {
            DB::table( 'user_management' )
            ->where( 'email', $request->email )
            ->update( [
                'name' => $request->name,
                'phone' => $request->phone,
                'town' => $request->town,
                'gender' => $request->gender,
                'category' => $request->category,
                'address' => $request->address,
                'nin' => $request->nin,
                'dob' => $request->dob,
                'updated_at' =>  now(),
            ] );
            return back()->with( 'success', 'Profile updated' );
        } else {
            return back()->with( 'Emessage', 'An Error Occured' );
        }

    }

    // public function users() {
    //     $response = Http::get( 'http://test.mygarage.africa/api/user-record' );

    //     $users = json_decode( $response->body() );

    //     return response()->json( $users );
    // }

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

