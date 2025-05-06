<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\JobOffer;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        $jobOffers = JobOffer::all();

        return response()->view('sitemap', compact('vehicles', 'jobOffers'));
    }
}