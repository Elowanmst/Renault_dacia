<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserAuthController::class, 'login']);
Route::get('/register', [UserAuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserAuthController::class, 'register']);
Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');

