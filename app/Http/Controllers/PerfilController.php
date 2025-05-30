<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function mostrar($nombre,$edad = null){

        if(empty($edad)){
            return "Hola, $nombre. No sabemos tu edad";
        }else{
            return (is_numeric($edad)) ? "Hola, $nombre. Tienes $edad años." : "Edad no válida.";
        }
    }
}
