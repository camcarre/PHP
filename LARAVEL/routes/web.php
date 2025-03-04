<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/editor', [SuperheroController::class, 'editor'])->name('editor');

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/new-hero', [SuperheroController::class, 'create'])->name('superheros.create');

Route::get('/profile', function () {
    return view('profile');
});

Route::resource('superheros', SuperheroController::class);

Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
