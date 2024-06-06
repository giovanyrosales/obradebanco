<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombre' => 'Giovany',
            'usuario' => 'giovany',
            'password' => bcrypt('1234'),
            'activo' => 1,
        ])->assignRole('admin');

        Usuario::create([
            'nombre' => 'David',
            'usuario' => 'david',
            'password' => bcrypt('1234'),
            'activo' => 1,
        ])->assignRole('inventario');
    }
}
