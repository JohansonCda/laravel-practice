<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    public function subirImagen(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image'
        ]);

        $archivo = $request->file('imagen');
        $nombre = time() . '_' . $archivo->getClientOriginalName();

        $ruta = Storage::disk('public')->putFileAs('fotos', $archivo, $nombre);

        if ($ruta && Storage::disk('public')->exists("fotos/$nombre")) {
            return "Imagen guardada con éxito.";
        } else {
            return "La imagen no se guardó.";
        }
    }
}
