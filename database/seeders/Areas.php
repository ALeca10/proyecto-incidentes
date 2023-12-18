<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear objetos de prueba para la tabla 'areas'
        $areas = [
            ['lugar' => 'Cafetería'],
            ['lugar' => 'Biblioteca'],
            ['lugar' => 'Polideportivo'],
            ['lugar' => 'Auditorio'],
            // Agrega más áreas según sea necesario
        ];

        // Insertar los datos en la tabla 'areas'
        DB::table('areas')->insert($areas);
    }
}
