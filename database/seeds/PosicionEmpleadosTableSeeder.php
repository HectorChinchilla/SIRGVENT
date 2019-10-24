<?php

use Illuminate\Database\Seeder;

class PosicionEmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posicion = [
            [
                'nombre' => 'Vendedor',
                'descripcion' => 'Nuevo vendedor',

            ],

            [
                'nombre' => 'Super vendedor',
                'descripcion' => 'Vendedor destacado',
            ],

        ];

        DB::table('posicion_empleados')->insert($posicion);
    }
}
