<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}', [SaludoController::class, 'saludo']);
