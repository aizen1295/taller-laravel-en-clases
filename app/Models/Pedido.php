<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['producto_id', 'usuario_id', 'cantidad', 'valor_total'];

    public function productos()
    {
        return $this->belongsTo('App\Models\Producto', 'producto_id');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }
}
