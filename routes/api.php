<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('events', EventController::class);
    Route::apiResource('venues', VenueController::class);
});

Route::post('login', [LoginController::class, 'login']);
