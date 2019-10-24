<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    protected $fillable = ['fecha', 'total', 'descripcion', 'cliente_id', 'empleado_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function detalleVenta()
    {

        return $this->hasMany('App\DetalleVenta');
    }

    public function empleado()
    {
        return $this->belongsTo('App\Empleado');
    }
}
