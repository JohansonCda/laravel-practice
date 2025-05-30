<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludo($nombre){
        return "Hola, $nombre. ¡Bienvenido a Laravel!";
    }
}