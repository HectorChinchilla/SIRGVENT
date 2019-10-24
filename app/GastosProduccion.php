<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GastosProduccion extends Model
{
    protected $table = 'gastos_produccions';

    protected $fillable = ['nombre', 'precio', 'descripcion', 'producto_id'];

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
