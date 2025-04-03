<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Models\Horaire;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer tous les horaires
        
        $services = Service::all(); 
        $horaires = Horaire::all()->keyBy('day'); // Associe chaque horaire à son jour
        return view('index', compact('horaires', 'services')); // Passe les horaires à la vue
    }  
}
