<?php

namespace App\Http\Controllers;

use App\Models\BettingLocation;
use Illuminate\Http\Request;

class BettingController extends Controller
{
    public function bettinglocation(){
        $locations = BettingLocation::all();
        return view('bettingLocation',compact('locations'));
    }
    public function bettingnumber(){
        return view('bettingNumber');
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
        BettingLocation::create($request->all());
        return redirect()->route('betting-locations.index')->with('success','Betting location created successfully.');
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
        return redirect()->route('betting-locations.index')->with('success','Betting location updated successfully.');
    }

    public function destroy($id)
    {
        BettingLocation::destroy($id);

        return redirect()->route('betting-locations.index')
                         ->with('success','Betting location deleted successfully.');
    }
}
