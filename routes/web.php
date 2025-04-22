<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HoraireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExceptionalClosureController;
use App\Http\Controllers\ExceptionalEventController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\JobOfferController;


// Auth routes
Route::get('/admin', [DashboardController::class, 'index'])->name('admin')->middleware(['auth']);

//recruitment routes
// Route::get('/recrutement', function () {
//     return view('recrutement');
// })->name('recrutement');
Route::get('/recrutement', [JobOfferController::class, 'index'])->name('recrutement');
Route::get('/recrutement', [JobOfferController::class, 'publicIndex'])->name('recrutement');

// Routes pour les véhicules
Route::resource('vehicles', VehicleController::class)->except(['show', 'index'])->middleware(['auth']);
Route::resource('vehicles', VehicleController::class)->only(['show', 'index']);

// Routes pour les utilisateurs
Route::resource('users', UserController::class)->middleware(['auth']);

// Routes pour les services
Route::resource('services', ServiceController::class)->except(['show', 'index'])->middleware(['auth']);
Route::resource('services', ServiceController::class)->only(['show', 'index']);


// Routes pour les horaires
Route::resource('horaires', HoraireController::class)->except(['show', 'index'])->middleware(['auth']);
Route::resource('horaires', HoraireController::class)->only(['show', 'index']);

// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('index');


// Routes pour les fermetures exceptionnelles
Route::resource('exceptional-closures', ExceptionalClosureController::class)->except(['show'])->middleware(['auth']);

// Routes pour les evénements exceptionnels
Route::resource('exceptional-events', ExceptionalEventController::class)->except(['show'])->middleware(['auth']);

// Routes pour les membres de l'équipe
Route::resource('team_members', TeamMemberController::class)->middleware(['auth']);

// Routes pour les jobs
Route::resource('job_offers', JobOfferController::class)->middleware(['auth']);

//
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/homepage/background/edit', [HomepageController::class, 'editBackground'])->name('admin.homepage.edit');
    Route::post('/homepage/background/update', [HomepageController::class, 'updateBackground'])->name('admin.homepage.updateBackground');
});

