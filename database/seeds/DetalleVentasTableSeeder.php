<?php

use Illuminate\Database\Seeder;

class DetalleVentasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detalleven = [
            [
                'cantidad' => 6900,
                'precio' => 1.25,
                'subtotal' => 8625,
                'venta_id' => 1,
                'producto_id' => 2,

            ],

            [
                'cantidad' => 500,
                'precio' => 1,
                'subtotal' => 500,
                'venta_id' => 2,
                'producto_id' => 2,
            ],

        ];

        DB::table('detalle_ventas')->insert($detalleven);
    }
}
