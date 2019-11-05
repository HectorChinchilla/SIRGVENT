<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 8)->unique();
            $table->string('nombre_completo', 120);
            $table->bigInteger('cantidad');
            $table->decimal('precio_compra', 11, 2);
            $table->decimal('precio_venta', 11, 2);
            $table->string('tiempo_produccion', 120);
            $table->boolean('estado_actual')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
