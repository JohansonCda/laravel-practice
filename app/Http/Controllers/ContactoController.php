<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviar(Request $request){
        $nombre = request()->input('nombre');
        $mensaje = request()->input('mensaje');

        return "Gracias, $nombre. Tu mensaje fue recibido: \"$mensaje\"";
    }
}
