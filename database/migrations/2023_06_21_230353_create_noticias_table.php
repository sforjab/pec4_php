<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Creamos una nueva migración anónima que extiende la clase Migration
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Dentro del método 'up' se define la lógica para crear la tabla 'noticias'
        Schema::create('noticias', function (Blueprint $table) {
            $table->id(); // Columna de tipo ID autoincremental
            $table->timestamps(); // Columnas 'created_at' y 'updated_at' para registrar las fechas de creación y actualización
            $table->string('titulo', 255); // Columna de tipo string con límite de 255 caracteres para el título
            $table->text('contenido'); // Columna de tipo texto para el contenido
            $table->date('fecha_publicacion'); // Columna de tipo fecha para la fecha de publicación
            $table->string('imagen'); // Columna de tipo string para la URL de la imagen
            $table->string('autor'); // Columna de tipo string para el autor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dentro del método 'down' se define la lógica para eliminar la tabla 'noticias' en caso de deshacer la migración
        Schema::dropIfExists('noticias');
    }
};
