<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicles::paginate(5);
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
            'picture' => 'nullable|string',
            'brand' => 'nullable|string',
            'model' => 'nullable|string',
            'fuel' => 'nullable|string',
            'year' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'transmission' => 'nullable|string',
            'puissance' => 'nullable|integer',
            'type' => 'nullable|in:new,used',
        ]);

        Vehicles::create($data);

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vehicle = Vehicles::findOrFail($id);
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vehicle = Vehicles::findOrFail($id);
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

        Vehicles::where('id', $id)->update($data);

        return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Vehicles::destroy($id);
        return redirect()->route('vehicles.index');
    }
}


