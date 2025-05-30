<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\PerfilController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}', [SaludoController::class, 'saludo']);

Route::get('/perfil/{nombre}/{edad?}', [PerfilController::class, 'mostrar']);
