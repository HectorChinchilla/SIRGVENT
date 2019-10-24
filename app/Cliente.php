<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = ['nombre_completo', 'direccion', 'correo_electronico', 'telefono', 'descripcion', 'estado_actual'];

    public function venta()
    {
        return $this->hasMany('App\Venta');
    }
}
