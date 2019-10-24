<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(PosicionEmpleadosTableSeeder::class);
        $this->call(EmpleadosTableSeeder::class);
        $this->call(VentasTableSeeder::class);
        $this->call(DetalleVentasTableSeeder::class);
        $this->call(ComprasTableSeeder::class);
        $this->call(DetalleComprasTableSeeder::class);
        $this->call(GastosProduccionTableSeeder::class);
    }
}
