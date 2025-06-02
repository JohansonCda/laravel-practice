<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ImagenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}', [SaludoController::class, 'saludo']);

Route::get('/perfil/{nombre}/{edad?}', [PerfilController::class, 'mostrar']);

Route::get('/contacto', function(){
    return view('contacto');
});

Route::post('/enviar-contacto', [ContactoController::class,'enviar']);

Route::get('/subir-imagen', function(){
    return view('subirImagen');
});
Route::post('/subir-imagen', [ImagenController::class,'subirImagen']);
