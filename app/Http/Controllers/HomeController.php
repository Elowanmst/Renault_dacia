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

        $jsonLd = [
            "@context" => "https://schema.org",
            "@type" => "AutoRepair",
            "name" => "Garage du Centre",
            "image" => "logo.png",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "84 Boulevard Georges Pompidou",
                "addressLocality" => "Saint-Gilles-Croix-de-Vie",
                "postalCode" => "85800",
                "addressCountry" => "FR"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => 46.7015877,
                "longitude" => -1.9497340
            ],
            "url" => "https://garage-du-centre-saint-gilles-croix-de-vie.paqe.io/",
            "telephone" => "+33 2 51 55 83 26",
            "openingHours" => [
                "Mo 09:00-12:00", "Mo 14:00-18:00",
                "Tu 08:00-12:00", "Tu 14:00-18:00",
                "We 08:00-12:00", "We 14:00-18:00",
                "Th 08:00-12:00", "Th 14:00-18:00",
                "Fr 08:00-12:00", "Fr 14:00-18:00"
            ],
            "priceRange" => "€€",
            "currenciesAccepted" => "EUR",
            "paymentAccepted" => "Cash, Credit Card",
            "brand" => [
                "@type" => "Brand",
                "name" => "Renault",
                "name" => "Dacia"
            ],
            "founder" => [
                "@type" => "Person",
                "name" => "Sandra Nobiron"
            ],
            "foundingDate" => "2004-07-01",
            "sameAs" => [
                "https://www.facebook.com/people/Renault-Garage-Du-Centre-Saint-Gilles-Croix-De-Vie/61557799235240/"
            ]
        ];
    
        $jsonLdScript = '<script type="application/ld+json">' . json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>';

        return view('index', compact('horaires', 'services', 'vehicles', 'exceptionalEvents', 'exceptionalClosures', 'teamMembers', 'jsonLdScript'));
    }  
}
