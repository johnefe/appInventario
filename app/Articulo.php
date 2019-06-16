<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =[
        'categoria_id','codigo', 'nombre', 'precio_venta', 'stock', 'descripcion', 'condicion'
    ];

    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
