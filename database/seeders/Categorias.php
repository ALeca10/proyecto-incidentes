<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear objetos de prueba para la tabla 'areas'
        $categorias = [
            ['nombre' => 'Objetos perdidos'],
            ['nombre' => 'Institución y ambiente'],
            ['nombre' => 'Anuncio público'],
            ['nombre' => 'Otros'],
            // Agrega más áreas según sea necesario
        ];

        // Insertar los datos en la tabla 'areas'
        DB::table('categorias')->insert($categorias);
    }
}