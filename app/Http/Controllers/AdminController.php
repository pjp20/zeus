<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {
        $admin = DB::table( 'users' )
        ->join("departments","departments.id" , "users.department")->get();
        $department = DB::table( 'departments' )->get();

        return view( 'admin', [ 'admin'=> $admin, 'depart' => $department ] );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $validatedData = $request->validate( [
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'phone' => 'required|numeric',
            'department' => 'required',
        ] );
        if ( $request->department != 'null' ) {
            if ( DB::table( 'users' )->insert([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'department' => $request->department,
                    'password' =>Hash::make( 0000),
                    'created_at' => now(),
                ])
                ){
                return back()->with( 'success', 'User Added success' );

                } else {
                return back()->with( 'Emessage', 'An Error Occured While Adding User' );
            }
        } else {
            return back()->with( 'Emessage', 'Please Select a Department' );
        }
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
