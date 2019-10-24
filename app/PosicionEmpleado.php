<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosicionEmpleado extends Model
{
    protected $table = 'posicion_empleados';

    protected $fillable = ['nombre', 'descripcion'];

    public function empleado()
    {
        return $this->hasMany('App\Empleado');
    }
}
