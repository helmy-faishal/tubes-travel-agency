<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function landingPage(){
        return view('layouts.landing');
    }

    public function index(){
        return view('layouts.explore.index');
    }
}
