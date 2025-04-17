<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
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
            'name' => 'nullable',
            'description' => 'nullable',
            'price' => 'nullable|numeric',
            'stock' => 'nullable',
            'picture' => 'nullable|file',
            'brand' => 'nullable|string',
            'model' => 'nullable|string',
            'fuel' => 'nullable|string',
            'year' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'transmission' => 'nullable|string',
            'puissance' => 'nullable|integer',
            'type' => 'nullable|in:new,used',
            // 'color' => 'nullable|string',
        ]);

        $vehicle = Vehicle::find(6); // Remplacez 1 par l'ID d'un véhicule existant
        dd($vehicle->getFirstMediaUrl('vehicles', 'large'));

        $vehicle = Vehicle::create($request->except('picture'));

        if ($request->hasFile('picture')) {
            $vehicle->addMediaFromRequest('picture')->toMediaCollection('vehicles');
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
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Vehicle::where('id', $id)->update($data);

        return redirect()->route('vehicles.index');
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


