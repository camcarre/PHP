<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SuperheroController;

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

    Route::get('/superheros', [SuperheroController::class, 'index']); 
    Route::get('/superheros/{id}', [SuperheroController::class, 'show']); 
    Route::post('/superheros', [SuperheroController::class, 'store']); 
    Route::put('/superheros/{id}', [SuperheroController::class, 'update']);  
    Route::delete('/superheros/{id}', [SuperheroController::class, 'destroy']); 
});