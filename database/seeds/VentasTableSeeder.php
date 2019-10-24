<?php

use Illuminate\Database\Seeder;

class VentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventas = [
            [
                'fecha' => '2019-06-10',
                'total' => 6900,
                'descripcion' => 'Venta al mayoreo',
                'cliente_id' => 1,
                'empleado_id' => 2,

            ],

            [
                'fecha' => '2019-10-20',
                'total' => 500,
                'descripcion' => 'Venta minorista',
                'cliente_id' => 2,
                'empleado_id' => 1,
            ],

        ];

        DB::table('ventas')->insert($ventas);
    }
}
