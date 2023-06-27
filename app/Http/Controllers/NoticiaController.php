<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function listaNoticias() {
        // Obtenemos las 5 primeras noticias por su ID (2 reales y 3 generadas con Faker)
        $noticias = Noticia::take(5)->get();

        // Se pasan los datos a la vista
        return view('noticias.index', compact('noticias'));
    }

    public function detalleNoticia($id) {
        // Buscamos la noticia por su ID
        $noticia = Noticia::findOrFail($id);

        // Se pasa la noticia a la vista
        return view('noticias.detalleNoticia', compact('noticia'));
    }
}
