<?php

use Illuminate\Database\Seeder;

class DetalleComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detallecompra = [
            [
                'cantidad' => 1000,
                'precio' => 1.10,
                'subtotal' => 1100,
                'compra_id' => 1,
                'producto_id' => 2,

            ],

            [
                'cantidad' => 500,
                'precio' => 1,
                'subtotal' => 500,
                'compra_id' => 2,
                'producto_id' => 2,
            ],

        ];

        DB::table('detalle_compras')->insert($detallecompra);
    }
}
