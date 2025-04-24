<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;

class HomepageController extends Controller
{
    /**
     * Affiche le formulaire de modification du background.
     */
    public function editBackground()
    {
        $homepage = Homepage::firstOrCreate(['id' => 1]);

        return view('admin.homepage.edit', compact('homepage'));
    }

    /**
     * Met à jour l’image de fond de la homepage.
     */
    public function updateBackground(Request $request)
    {
        $request->validate([
            'background' => 'required|image|max:5120|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $homepage = Homepage::firstOrCreate(['id' => 1]);

        // Supprime l’ancienne image si elle existe
        $homepage->clearMediaCollection('background');

        // Ajoute la nouvelle
        $homepage->addMediaFromRequest('background')->toMediaCollection('background');

        return redirect()->back()->with('success', 'Image de fond mise à jour avec succès.');
    }

    
}
