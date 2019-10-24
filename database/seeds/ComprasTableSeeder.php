<?php

use Illuminate\Database\Seeder;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compra = [
            [
                'fecha' => '2019-03-10',
                'total' => 450.50,

            ],

            [
                'fecha' => '2019-04-10',
                'total' => 350.25,

            ],

        ];

        DB::table('compras')->insert($compra);
    }
}
