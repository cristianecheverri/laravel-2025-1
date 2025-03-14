<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Event::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = Event::create($request->all());
        // $event = new Event($request->all());
        // $event->event_speaker_name = 'Orlando';
        // $event->save();
        return response()->json(['status' =>true, 'event' => $event]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        // $event = Event::find($id);
        return response()->json(['status'=>true,'event'=> $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        if ($event->update($request->all())) {
            return response()->json(['status' => true, 'event' => $event]);
        } else {
            return response()->json(['status' => false, 'event' => $event]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if ($event->delete()) {
            return response()->json(['status'=> true]);
        }
        return response()->json(['status'=> false]);
    }
}
