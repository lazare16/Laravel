<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        Event::create($validated);
        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }
}
