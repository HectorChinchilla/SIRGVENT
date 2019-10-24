<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emplea = [
            [
                'nombre_completo' => 'Jose Lopez',
                'direccion' => 'Esquipulas, City',
                'correo_electronico' => 'joselopez@gmail.com',
                'telefono' => '0050254256418',
                'c_u_i' => '2656125562134',
                'fecha_nacimiento' => '1999-10-10',
                'estado_actual' => 1,
                'posicion_empleado_id' => 1,

            ],

            [
                'nombre_completo' => 'Wiliam Soto',
                'direccion' => 'Atulapa, City',
                'correo_electronico' => 'wilysoto@gmail.com',
                'telefono' => '0050252456417',
                'c_u_i' => '4875214568124',
                'fecha_nacimiento' => '1998-11-05',
                'estado_actual' => 1,
                'posicion_empleado_id' => 2,
            ],

        ];

        DB::table('empleados')->insert($emplea);
    }
}
