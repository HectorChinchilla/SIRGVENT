<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['codigo','nombre_completo', 'cantidad', 'precio_compra', 'precio_venta', 'tiempo_produccion', 'estado_actual'];


    public function detalleVenta()
    {
        return $this->hasMany('App\DetalleVenta');
    }

    public function detalleCompra()
    {
        return $this->hasMany('App\DetalleCompra');
    }

    public function gastosProduccion()
    {
        return $this->hasMany('App\GastosProduccion');
    }
}
