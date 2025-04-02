<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'id' => 'nullable',
            'picture' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Service::create($data);

        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $services = Service::findOrFail($id);
        return view('service.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::findOrFail($id);
        return view('service.edit', compact('services'));
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

        Service::where('id', $id)->update($data);

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::destroy($id);
        return redirect()->route('services.index');
    }
}
