<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('accueil');
});

Route::get('/editor', function () {
    return view('editor');
});

Route::get('/cards', function () {
    return view('cards');
});

