<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }
 
    public function create()
    {
        return view('events.create');
    }

    public function store(EventRequest $request)
    {
        Event::create($request->validated());

    return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }
}
