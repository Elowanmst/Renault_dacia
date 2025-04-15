<?php

namespace App\Http\Controllers;

use App\Models\ExceptionalClosure;
use Illuminate\Http\Request;

class ExceptionalClosureController extends Controller
{
    /**
     * Affiche la liste des fermetures exceptionnelles.
     */
    public function index()
    {
        $exceptionalClosures = ExceptionalClosure::all();
        return view('exceptional_closures.index', compact('exceptionalClosures'));
    }

    /**
     * Affiche le formulaire pour ajouter une fermeture exceptionnelle.
     */
    public function create()
    {
        return view('exceptional_closures.create');
    }

    /**
     * Enregistre une nouvelle fermeture exceptionnelle.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string|max:255',
        ]);

        ExceptionalClosure::create($data);

        return redirect()->route('exceptional-closures.index')->with('success', 'Fermeture exceptionnelle ajoutée avec succès.');
    }

    /**
     * Affiche le formulaire pour modifier une fermeture exceptionnelle.
     */
    public function edit(ExceptionalClosure $exceptionalClosure)
    {
        return view('exceptional_closures.edit', compact('exceptionalClosure'));
    }

    /**
     * Met à jour une fermeture exceptionnelle existante.
     */
    public function update(Request $request, ExceptionalClosure $exceptionalClosure)
    {
        $data = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'nullable|string|max:255',
        ]);

        $exceptionalClosure->update($data);

        return redirect()->route('exceptional-closures.index')->with('success', 'Fermeture exceptionnelle mise à jour avec succès.');
    }

    /**
     * Supprime une fermeture exceptionnelle.
     */
    public function destroy(ExceptionalClosure $exceptionalClosure)
    {
        $exceptionalClosure->delete();

        return redirect()->route('exceptional-closures.index')->with('success', 'Fermeture exceptionnelle supprimée avec succès.');
    }
}
