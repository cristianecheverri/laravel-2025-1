<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('events', [EventController::class, 'index']);
// Route::post('events', [EventController::class, 'store']);
// Route::get('events/{event}', [EventController::class, 'show']);
// Route::put('events/{event}', [EventController::class, 'update']);
// Route::delete('events/{event}', [EventController::class, 'destroy']);

Route::apiResource('events', EventController::class);
