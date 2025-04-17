<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobOffers = JobOffer::all();
        return view('job_offers.index', compact('jobOffers'));
    }
    public function publicIndex()
    {
        $jobOffers = JobOffer::all(); // Récupère toutes les offres d'emploi
        return view('recrutement', compact('jobOffers')); // Transmet les données à la vue publique
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'string|max:255|nullable',
            'salary_description' => 'numeric|nullable',
            'status' => 'string|max:255|nullable',
            'type' => 'string|max:255|nullable',
            'requirements' => 'string|nullable',
            'responsibilities' => 'string|nullable',
            'posted_at' => 'date|nullable',
            'expires_at' => 'date|after:posted_at|nullable',
        ]);

        JobOffer::create($request->all());

        return redirect()->route('job_offers.index')->with('success', 'Job offer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOffer $jobOffer)
    {
        return view('job_offers.show', compact('jobOffer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOffer $jobOffer)
    {
        return view('job_offers.edit', compact('jobOffer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobOffer $jobOffer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'string|max:255',
            'salary_description' => 'numeric',
            'status' => 'string|max:255',
            'type' => 'string|max:255',
            'requirements' => 'string',
            'responsibilities' => 'string',
            'posted_at' => 'date',
            'expires_at' => 'date|after:posted_at',

        ]);

        $jobOffer->update($request->all());

        return redirect()->route('job_offers.index')->with('success', 'Job offer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOffer $jobOffer)
    {
        $jobOffer->delete();

        return redirect()->route('job_offers.index')->with('success', 'Job offer deleted successfully.');
    }
}
