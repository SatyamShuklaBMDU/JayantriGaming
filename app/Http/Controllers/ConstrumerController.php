<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class ConstrumerController extends Controller
{
    public function allUser(){
        $customers=Customer::orderby('id','DESC')->get();
        return view('users.allusers',['customers'=>$customers]);
    }
}
