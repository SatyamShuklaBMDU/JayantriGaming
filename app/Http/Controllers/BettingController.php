<?php

namespace App\Http\Controllers;

use App\Models\BettingLocation;
use Illuminate\Http\Request;

class BettingController extends Controller
{
    public function bettinglocation()
    {
        $locations = BettingLocation::all();
        return view('bettingLocation', compact('locations'));
    }
    public function bettingnumber()
    {
        return view('bettingNumber');
    }
    public function edit($id)
    {
        $bettingLocation = BettingLocation::findOrFail($id);
        return response()->json($bettingLocation);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'credit_date' => 'required|date',
            'betting_location' => 'required|string',
            'total_number' => 'required|string',
        ]);
        BettingLocation::create($request->all());
        return redirect()->route('betting-location')->with('success', 'Betting location created successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'credit_date' => 'required|date',
            'betting_location' => 'required|string',
            'total_number' => 'required|string',
        ]);
        $bettingLocation = BettingLocation::find($id);
        $bettingLocation->update($request->all());
        return redirect()->route('betting-location')->with('success', 'Betting location updated successfully.');
    }

    public function destroy($id)
    {
        BettingLocation::destroy($id);
        return redirect()->route('betting-location')
            ->with('success', 'Betting location deleted successfully.');
    }
    public function filter(Request $request)
    {
        $start = $request->startDate;
        $end = $request->endDate;
        $locations = BettingLocation::whereBetween('credit_date', [$start, $end])->get();
        return view('bettingLocation', compact('locations','start','end'));
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
