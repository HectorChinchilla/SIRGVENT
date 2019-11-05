<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_completo', 120);
            $table->string('direccion', 120);
            $table->string('correo_electronico', 45);
            $table->string('telefono', 45);
            $table->string('c_u_i', 45);
            $table->date('fecha_nacimiento');
            $table->boolean('estado_actual')->default(1);
            $table->bigInteger('posicion_empleado_id')->unsigned();
            $table->timestamps();

            $table->foreign('posicion_empleado_id')->references('id')->on('posicion_empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
