<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    protected $fillable = ['nombre_completo', 'direccion', 'correo_electronico', 'telefono',  'c_u_i', 'fecha_nacimiento', 'estado_actual', 'posicion_empleado_id'];

    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }

    public function posicionEmpleado()
    {
        return $this->belongsTo('App\PosicionEmpleado');
    }
}
