<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Carbon\Carbon;

class ConstrumerController extends Controller
{
    public function allUser(){
        $customers=Customer::orderby('id','DESC')->get();
        return view('users.allusers',['customers'=>$customers]);
    }
    public function updateStatus(Request $request) {
        $userId = $request->input('userId');
        $newStatus = $request->input('newStatus');
        $user = Customer::find($userId);
        if ($user) {
            $user->status = $newStatus;
            $user->save();
            return response()->json(['success' => true, 'message' => 'User status updated successfully']);
        }
        return response()->json(['success' => false, 'message' => 'User not found']);
    }
    public function blockUser(){
        $customers=Customer::where('status','block')->orderby('id','DESC')->get();
        return view('users.blockAccount',compact('customers'));
    }
    public function activeUser(){
        $customers=Customer::where('status','active')->orderby('id','DESC')->get();
        return view('users.activeuser',compact('customers'));
    }
    public function filter(Request $request)
    {
        // dd($request->all());
        $start = Carbon::createFromFormat('d-m-Y', $request->startDate)->format('Y-m-d');
        $end = Carbon::createFromFormat('d-m-Y', $request->endDate)->format('Y-m-d');
        $customers = Customer::where('status','block')->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        dd($customers);
        return view('users.blockAccount', compact('customers', 'start', 'end'));
    }
    public function filterActive(Request $request)
    {
        // dd($request->all());
        $start = $request->startDate;
        $end = $request->endDate;
        $customers = Customer::where('status','active')->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'desc')
            ->get();
        // dd($customers);
        return view('users.activeuser', compact('customers', 'start', 'end'));
    }
}
