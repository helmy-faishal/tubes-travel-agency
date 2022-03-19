<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct(){
        //Semua perlu login kecuali detail
        $this->middleware('auth')->except(['detail']);
    }

    public function index($package){
        return view('layouts.booking.index',['package'=>$package]);
    }

    public function detail($package){
        return view('layouts.booking.detail',['package'=>$package]);
    }

}
