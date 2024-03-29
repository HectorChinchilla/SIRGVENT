<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $fillable = ['fecha', 'total'];

    public function detalleCompra()
    {
        return $this->hasMany('App\DetalleCompra');
    }
}
