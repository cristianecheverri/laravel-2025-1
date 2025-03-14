<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return [
        "mensaje" => "Hola mundo"
    ];
});

Route::get('/saludo', function () {
    Log::info('Llamaron saludo');
    return [
        "estado" => true,
        "mensaje" => "Hola mundo desde la ruta saludo",
        "codigo" => 200
    ];
});


Route::get('/dashboard', function () {
    return [
        "estado" => true,
        "mensaje" => "Hola mundo desde la ruta saludo",
        "codigo" => 200
    ];
});
