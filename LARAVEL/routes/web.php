<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\AuthController;


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
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
