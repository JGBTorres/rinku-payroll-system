<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
   // Ejecutar el seeder para insertar los roles en la base de datos
    public function run(): void
    {
        // Definimos los roles con sus respectivos bonos por hora
        $roles = [
            ['nombre' => 'Chofer', 'bono_por_hora' => 10.00],
            ['nombre' => 'Cargador', 'bono_por_hora' => 5.00],
            ['nombre' => 'Auxiliar', 'bono_por_hora' => 0.00], // Sin bono extra por hora
        ];

        foreach ($roles as $rol) {
            Rol::create($rol);
        }
    }
}
