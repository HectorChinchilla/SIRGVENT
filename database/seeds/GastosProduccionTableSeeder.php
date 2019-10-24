<?php

use Illuminate\Database\Seeder;

class GastosProduccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gastosproduccion = [
            [
                'nombre' => 'Bolsa nailon',
                'precio' => 300,
                'descripcion' => 'Se compro la cantidad de 10000 bolsas medida 5x8',
                'producto_id' => 1,


            ],

            [
                'nombre' => 'Abono Yara',
                'precio' => 225,
                'descripcion' => 'Se compro un quintal de abono',
                'producto_id' => 2,

            ],

        ];

        DB::table('gastos_produccions')->insert($gastosproduccion);
    }
}
