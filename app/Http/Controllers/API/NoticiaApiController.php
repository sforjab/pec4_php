<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaApiController extends Controller
{
    public function getNoticias($page)
    {
        // Obtenemos las noticias paginadas, seleccionando los campos necesarios
        $noticias = Noticia::paginate(10, ['id', 'titulo', 'fecha_publicacion'], 'page', $page);

        // Se devuelven las noticias en formato JSON
        return response()->json($noticias);
    }

    public function getNoticia($id)
    {
        // Buscamos la noticia por su ID
        $noticia = Noticia::findOrFail($id);

        // Se devuelve la noticia en formato JSON
        return response()->json($noticia);
    }
}
