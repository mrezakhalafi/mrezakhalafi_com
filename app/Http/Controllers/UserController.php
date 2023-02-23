<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

use App\Customer;

class UserController extends BaseController {

    /**
        * Display a listing of the resource.
        *
        * @return Response
        */
    public function index()
    {
        //
    }

    public function contact(Request $request){

        $nama = $request->name;
        $email = $request->email;
        $pesan = $request->pesan;

        return redirect('mailto:mrezakhalafi@gmail.com?subject='.$email.'&body=Halo nama saya '.$nama.', '.$pesan.'');
    }

    public function subscription(Request $request){

        $email = $request->email;

        $customer = new Customer;
        $customer->email = $email;
        $customer->save();

        return redirect("http://www.mrezakhalafi.com");
    }

    /**
        * Show the form for creating a new resource.
        *
        * @return Response
        */
    public function create()
    {
        //
    }

    /**
        * Store a newly created resource in storage.
        *
        * @return Response
        */
    public function store()
    {
        //
    }

    /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function show($id)
    {
        //
    }

    /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return Response
        */
    public function edit($id)
    {
        //
    }

    /**
        * Update the specified resource in storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function update($id)
    {
        //
    }

    /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return Response
        */
    public function destroy($id)
    {
        //
    }

}