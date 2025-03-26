<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth'])->name('admin');


Route::resource('vehicles', VehicleController::class)->except(['show', 'index'])->middleware(['auth']);
Route::resource('vehicles', VehicleController::class)->only(['show', 'index']);

// Route::get('/admin/users/index', [UserController::class, 'index'])->name('users.index');
// Route::get('/admin/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::resource('users', UserController::class)->middleware(['auth']);