<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserControler extends Controller
{
    public function allUser(){
        return view('users.allusers');
    }
    public function winningUser(){
        return view('users.winningHistory');
    }
    public function userWithdraw(){
        return view('users.withdrawHistory');
    }
    public function logout(){
        Auth::logout();
        session()->invalidate();
        return redirect('/');
    }
}
