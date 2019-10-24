<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $table = 'detalle_compras';

    protected $fillable = ['cantidad', 'precio', 'subtotal', 'compra_id', 'producto_id'];

    public function compra()
    {
        return $this->belongsTo('App\Compra');
    }

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
