<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produ = [
            [
                'nombre_completo' => 'Ana Cafe 14',
                'cantidad' => '2000',
                'precio_compra' => 1.25,
                'precio_venta' => 1.75,
                'tiempo_produccion' => '4 meses',
                'estado_actual' => 1,

            ],

            [
                'nombre_completo' => 'Noventa rojo',
                'cantidad' => '5000',
                'precio_compra' => 1.10,
                'precio_venta' => 1.75,
                'tiempo_produccion' => '4 meses',
                'estado_actual' => 1,
            ],

        ];

        DB::table('productos')->insert($produ);
    }
}
