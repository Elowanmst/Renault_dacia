<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');


Route::get('/users', function () {
    return view('admin.user-index');
})->name('users');

Route::resource('vehicles', VehicleController::class)->except(['show', 'index'])->middleware(['auth']);
Route::resource('vehicles', VehicleController::class)->only(['show', 'index']);