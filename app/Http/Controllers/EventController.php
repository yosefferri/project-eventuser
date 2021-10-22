<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class EventController extends Controller
{
    public function userEvents()
    {
       //$authId = Event::all();

       $user = User::with('events')->find(Auth::id());
       //$authId = Auth::id();
       return response()->json($user->events, 200);
    }

    public function index()
    {
        $events = Event::all();
        return response()->json($events, 200);
    }

    public function show(Event $event)
    {
        return response()->json($event, 200);
    }

    public function store(Request $request)
    {
        $event = Event::create($request->all());

        return response()->json($event, 201);
    }

    public function update(Request $request, Event $event)
    {
        $event->update($request->all());

        return response()->json($event, 200);
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return response()->json(null, 204);
    }
}
