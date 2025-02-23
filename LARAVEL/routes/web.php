<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;


Route::get('/', function () {
    return view('accueil');
});

Route::get('/editor', function () {
    return view('editor');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/new-hero', function () {
    return view('new_hero');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::resource('superheros', SuperheroController::class);

