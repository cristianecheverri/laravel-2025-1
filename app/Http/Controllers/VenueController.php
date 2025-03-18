<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Venue::where('venue_name', 'ilike', "%$request->search%")
            ->where('venue_max_capacity', '>=', $request->input('min_capacity', 0))
            ->with('events')
            ->orderBy('venue_name', 'asc')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venue = Venue::create($request->all());
        return response()->json(['status' => true, 'venue' => $venue]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        $venue->load('events');
        return response()->json(['status' => true, 'venue' => $venue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $venue)
    {
        if ($venue->update($request->all())) {
            return response()->json(['status' => true, 'venue' => $venue]);
        } else {
            return response()->json(['status' => false, 'venue' => $venue]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        if ($venue->delete()) {
            return response()->json(['status' => true]);
        }
        return response()->json(['status' => false]);
    }
}
