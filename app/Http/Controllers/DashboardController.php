<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\User;
use App\Models\ExceptionalClosure;
use App\Models\ExceptionalEvent;
use App\Models\TeamMember;
use App\Models\JobOffer;

class DashboardController extends Controller
{
    public function index()
    {
        $vehiclesCount = Vehicle::count();
        $servicesCount = Service::count();
        $usersCount = User::count();
        $exceptionalClosures = ExceptionalClosure::all();
        $exceptionalEvents = ExceptionalEvent::all();
        // $teamMembers = TeamMember::all();
        // $jobOffers = JobOffer::all();


        return view('dashboard', [
            'vehiclesCount' => $vehiclesCount,
            'servicesCount' => $servicesCount,
            'usersCount' => $usersCount,
            'exceptionalClosures' => $exceptionalClosures,
            'exceptionalEvents' => $exceptionalEvents,
            // 'teamMembers' => $teamMembers,
            // 'jobOffers' => $jobOffers,
        ]);
    }
}
