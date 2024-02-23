<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;

class ConstrumerController extends Controller
{
    public function allUser(){
       // return view('users.allusers');
        $customers=Customer::orderby('id','DESC')->get();
        // dd($customers);
        return view('users.allusers',[
            'customers'=>$customers    
        ]);
        
    }
}
