<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Horaire;
use App\Models\Service;
use App\Models\ExceptionalEvent;
use App\Models\ExceptionalClosure;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer tous les horaires
        
        // $services = Service::all(); 
        // $vehicles = Vehicle::all();
        // $horaires = Horaire::all()->keyBy('day'); // Associe chaque horaire à son jour
        // $exceptionalEvents = ExceptionalEvent::all(); 
        // $exceptionalClosures = ExceptionalClosure::all();
        // $teamMembers = TeamMember::all(); 

        // return view('index', compact('horaires', 'services', 'vehicles', 'exceptionalEvents', 'exceptionalClosures', 'teamMembers')); // Passe les infos à la vue
    
        $services = Service::with('media')->get(); // Charge les médias associés
        $vehicles = Vehicle::with('media')->get(); // Charge les médias associés
        $horaires = Cache::remember('horaires', 60, function () {
            return Horaire::all()->keyBy('day');
        });
        $exceptionalEvents = ExceptionalEvent::all();
        $exceptionalClosures = ExceptionalClosure::all();
        $teamMembers = TeamMember::with('media')->get(); // Charge les médias associés

        return view('index', compact('horaires', 'services', 'vehicles', 'exceptionalEvents', 'exceptionalClosures', 'teamMembers'));
    }  
}
