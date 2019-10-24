<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clien = [
            [
                'nombre_completo' => 'Jose Matinez',
                'direccion' => 'San Jacinto, City',
                'correo_electronico' => 'josemarti@gmail.com',
                'telefono' => '0050254256418',
                'descripcion' => ' ',
                'estado_actual' => 1,

            ],

            [
                'nombre_completo' => 'Frank Lopez',
                'direccion' => 'Peten, City',
                'correo_electronico' => 'franklop@gmail.com',
                'telefono' => '0050252256417',
                'descripcion' => 'Cliente mayorista',
                'estado_actual' => 1,
            ],

        ];

        DB::table('clientes')->insert($clien);
    }
}
