<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Service;
use App\Models\User;
use App\Models\ExceptionalClosure;
use App\Models\ExceptionalEvent;

class DashboardController extends Controller
{
    public function index()
    {
        $vehiclesCount = Vehicle::count();
        $servicesCount = Service::count();
        $usersCount = User::count();
        $exceptionalClosures = ExceptionalClosure::all();
        $exceptionalEvents = ExceptionalEvent::all();

        return view('dashboard', [
            'vehiclesCount' => $vehiclesCount,
            'servicesCount' => $servicesCount,
            'usersCount' => $usersCount,
            'exceptionalClosures' => $exceptionalClosures,
            'exceptionalEvents' => $exceptionalEvents,
        ]);
    }
}
