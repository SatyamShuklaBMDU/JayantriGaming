<?php

namespace App\Http\Controllers;

use App\Models\BettingLocation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BettingController extends Controller
{
    public function bettinglocation()
    {
        $locations = BettingLocation::all();
        return view('bettingLocation', compact('locations'));
    }
    public function edit($id)
    {
        $bettingLocation = BettingLocation::findOrFail($id);
        return response()->json($bettingLocation);
    }

    public function store(Request $request)
    {
        $request->validate([
            'credit_date' => 'required|date',
            'betting_location' => 'required|string',
            'total_number' => 'required|string',
        ]);
        $formatted_date = Carbon::createFromFormat('d-m-Y', $request->input('credit_date'))->format('Y-m-d');
        $data = $request->all();
        $data['credit_date'] = $formatted_date;
        $data['status'] = '1';
        BettingLocation::create($data);
        // dd($request->all());
        return redirect()->route('betting-location')->with('success', 'Betting location successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'credit_date' => 'required|date',
            'betting_location' => 'required|string',
            'total_number' => 'required|string',
        ]);
        // dd($request->all());
        $formattedDate = Carbon::createFromFormat('d-m-Y', $request->input('credit_date'))->format('Y-m-d');
        // dd($formattedDate);
        $bettingLocation = BettingLocation::find($id);
        $bettingLocation->credit_date = $formattedDate;
        $bettingLocation->update([
            'betting_location' => $request->input('betting_location'),
            'total_number' => $request->input('total_number'),
            'credit_date' => $formattedDate,
        ]);
        return redirect()->route('betting-location')->with('success', 'Betting location updated successfully.');
    }

    public function destroy($id)
    {
        // dd($id);
        BettingLocation::destroy($id);
        return response()->json(['message' => 'Status updated successfully']);
    }
    public function filter(Request $request)
    {
        $start = Carbon::createFromFormat('d-m-Y', $request->startDate)->format('Y-m-d');
        $end = Carbon::createFromFormat('d-m-Y', $request->endDate)->format('Y-m-d');
        // dd($end);
        $locations = BettingLocation::whereBetween('credit_date', [$start, $end])->get();
        // dd($locations);
        return view('bettingLocation', compact('locations', 'start', 'end'));
    }
    public function updateStatus(Request $request)
    {
        // dd($request->all());
        $bettingLocationId = $request->input('bettingLocationId');
        $status = $request->input('status');
        $bettingLocation = BettingLocation::findOrFail($bettingLocationId);
        $bettingLocation->status = $status;
        $bettingLocation->save();
        return response()->json(['message' => 'Status updated successfully']);
    }
}
