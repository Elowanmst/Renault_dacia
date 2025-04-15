<?php

namespace App\Http\Controllers;

use App\Models\ExceptionalEvent;
use Illuminate\Http\Request;

class ExceptionalEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exceptionalEvents = ExceptionalEvent::all();
        return view('exceptional_events.index', compact('exceptionalEvents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exceptional_events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        ExceptionalEvent::create($request->all());

        return redirect()->route('exceptional-events.index')->with('success', 'Exceptional event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExceptionalEvent $exceptionalEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExceptionalEvent $exceptionalEvent)
    {
        return view('exceptional_events.edit', compact('exceptionalEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExceptionalEvent $exceptionalEvent)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        $exceptionalEvent->update($request->all());

        return redirect()->route('exceptional-events.index')->with('success', 'Exceptional event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExceptionalEvent $exceptionalEvent)
    {
        $exceptionalEvent->delete();

        return redirect()->route('exceptional-events.index')->with('success', 'Exceptional event deleted successfully.');
    }
}
