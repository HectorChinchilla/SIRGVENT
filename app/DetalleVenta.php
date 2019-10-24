<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table = 'detalle_ventas';

    protected $fillable = ['cantidad', 'precio', 'subtotal', 'venta_id', 'producto_id'];


    public function venta()
    {
        return $this->belongsTo('App\Venta');
    }

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
