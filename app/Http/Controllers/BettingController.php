<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BettingController extends Controller
{
    public function bettinglocation(){
        return view('bettingLocation');
    }
    public function bettingnumber(){
        return view('bettingNumber');
    }
}
