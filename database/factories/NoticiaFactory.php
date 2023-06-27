<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 * Se extiende la clase Factory y se utiliza para generar instancias de la clase Noticia.
 */
class NoticiaFactory extends Factory
{
    /**
     * Se define el estado por defecto del modelo.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Se define el array asociativo con los atributos y valores predeterminados de una noticia
        return [
            'titulo' => $this->faker->sentence, // Se genera una oración aleatoria para el título
            'contenido' => $this->faker->paragraphs(3, true), // Se genera 3 párrafos aleatorios para el contenido
            'fecha_publicacion' => $this->faker->date(), // Se genera una fecha aleatoria
            'imagen' => 'images/fake-image.jpg', // Ruta de imagen falsa para la imagen de la noticia
            'autor' => $this->faker->name, // Se genera un nombre de autor aleatorio
        ];
    }
}
