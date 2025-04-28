<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Parsedown;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        $parsedown = new Parsedown();

        foreach ($vehicles as $vehicle) {
            $vehicle->description = $parsedown->text($vehicle->description);
        }    

        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer',
            'picture' => 'required|array', // ATTENTION ici : picture doit être un tableau
            'picture.*' => 'image|mimes:jpeg,png,jpg,gif,svg', // Chaque image validée
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'mileage' => 'required|integer|between:0,999999',
            'transmission' => 'required|string|max:255',
            'puissance' => 'required|integer|between:0,999',
            'type' => 'required|in:new,used',
        ]);
        

        $vehicle = Vehicle::create($request->except('picture'));

        // if ($request->hasFile('picture')) {
        //     // $vehicle->addMedia($request->file('picture'))->toMediaCollection('vehicles');
        //     // Gestion de plusieurs images
        //     foreach ($request->file('picture') as $picture) {
        //         $vehicle->addMedia($picture)
        //                 ->toMediaCollection('vehicles');
        //     }
        // }
        if ($request->hasFile('picture')) {
            foreach ($request->file('picture') as $picture) {
                \Log::info('Adding picture: ' . $picture->getClientOriginalName());
                $vehicle->addMedia($picture) 
                        ->toMediaCollection('vehicles');
            }
        }

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.show', compact('vehicle'));
    }
    public function showDetails(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.details', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        // Valider les données
        $data = $request->validate([
            'name' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            'stock' => 'nullable|integer',
            'picture' => 'required|file|image|max:5120|mimes:jpeg,png,jpg,gif,svg',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'mileage' => 'required|integer|digits_between:0,999999',
            'transmission' => 'required|string|max:255',
            'puissance' => 'required|integer|digits_between:0,999',
            'type' => 'required|in:new,used',
        ]);

        // Mettre à jour les autres champs
        $vehicle->update($data);

        // Vérifier si une nouvelle image a été téléchargée
        if ($request->hasFile('picture')) {
            // Supprimer l'ancienne image
            $vehicle->clearMediaCollection('vehicles');

            // Ajouter la nouvelle image
            $vehicle->addMediaFromRequest('picture')->toMediaCollection('vehicles');
        }

        return redirect()->route('vehicles.index')->with('success', __('Vehicle updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vehicle::destroy($id);
        return redirect()->route('vehicles.index');
    }

}


