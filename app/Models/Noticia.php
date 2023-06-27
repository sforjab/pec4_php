<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Los atributos que son asignables en masa.
    protected $fillable = [
        'titulo',
        'contenido',
        'fecha_publicacion',
        'imagen',
        'autor'
    ];
}
