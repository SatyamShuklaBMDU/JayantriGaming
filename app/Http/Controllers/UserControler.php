<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function allUser(){
        return view('users.allusers');
    }
    public function activeUser(){
        return view('users.activeuser');
    }
    public function winningUser(){
        return view('users.winningHistory');
    }
    public function userWithdraw(){
        return view('users.withdrawHistory');
    }
    public function blockUser(){
        return view('users.blockAccount');
    }
}
