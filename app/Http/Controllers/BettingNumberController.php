<?php

namespace App\Http\Controllers;

use App\Models\BettingLocation;
use App\Models\BettingNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BettingNumberController extends Controller
{
    public function bettingnumber()
    {
        $betting = BettingNumber::all();
        $locations = BettingLocation::all();
        return view('bettingNumber', compact('betting', 'locations'));
    }
    public function edit($id)
    {
        $bettingLocation = BettingNumber::findOrFail($id);
        return response()->json($bettingLocation);
    }

    public function store(Request $request)
    {
        $request->validate([
            'credit_date' => 'required|date',
            'betting_location_id' => 'required|string',
            'betting_number' => 'required|string',
        ]);
        $formatted_date = Carbon::createFromFormat('d-m-Y', $request->input('credit_date'))->format('Y-m-d');
        $data = $request->all();
        $data['credit_date'] = $formatted_date;
        $data['status'] = '1';
        BettingNumber::create($data);
        return redirect()->route('betting-number')->with('success', 'Betting Number successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'credit_date' => 'required|date', 
            'betting_location_id' => 'required|string',
            'betting_number' => 'required|string',
        ]);
        $formattedDate = Carbon::createFromFormat('d-m-Y', $request->input('credit_date'))->format('Y-m-d');
        $bettingNumber = BettingNumber::find($id);

        // Update the attributes
        $bettingNumber->betting_location_id = $request->input('betting_location_id');
        $bettingNumber->betting_number = $request->input('betting_number');
        $bettingNumber->credit_date = $formattedDate;

        // Save the changes
        $bettingNumber->save();

        // Redirect with success message
        return redirect()->route('betting-number')->with('success', 'Betting Number updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        BettingNumber::destroy($id);
        return response()->json(['message' => 'Status updated successfully']);
    }
    public function filter(Request $request)
    {
        $start = Carbon::createFromFormat('d-m-Y', $request->startDate)->format('Y-m-d');
        $end = Carbon::createFromFormat('d-m-Y', $request->endDate)->format('Y-m-d');
        $betting = BettingNumber::whereBetween('credit_date', [$start, $end])->get();
        // dd($betting);
        $locations = BettingLocation::all();
        return view('bettingNumber', compact('betting', 'start', 'end','locations'));
    }
    public function updateStatus(Request $request)
    {
        // dd($request->all());
        $bettingLocationId = $request->input('bettingLocationId');
        $status = $request->input('status');
        $bettingLocation = BettingNumber::findOrFail($bettingLocationId);
        $bettingLocation->status = $status;
        $bettingLocation->save();
        return response()->json(['message' => 'Status Updated Successfully']);
    }
}
