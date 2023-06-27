<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Utilizamos el factory de Noticia para crear 100 noticias ficticias
        Noticia::factory(100)->create();
    }
}
