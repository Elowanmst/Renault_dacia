<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use Illuminate\Http\Request;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horaires = Horaire::paginate(10);
        return view('horaire.index', compact('horaires'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('horaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id' => 'nullable',
            'day' => 'required',
            'morningO' => 'required',
            'morningC' => 'required',
            'afternoonO' => 'required',
            'afternoonC' => 'required',
           
        ]);

        Horaire::create($data);

        return redirect()->route('horaires.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $horaires = Horaire::findOrFail($id);
        return view('horaire.show', compact('horaires'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $horaires = Horaire::findOrFail($id);
        return view('horaire.edit', compact('horaires'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'day' => 'required',
            'morningO' => 'required',
            'morningC' => 'required',
            'afternoonO' => 'required',
            'afternoonC' => 'required',
        ]);

        Horaire::where('id', $id)->update($data);

        // Clear the cache for the updated Horaire
        cache()->forget("horaire_{$id}");

        return redirect()->route('horaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Horaire::destroy($id);
        return redirect()->route('horaires.index');
    }
}
