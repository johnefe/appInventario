<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = [
        'nombre',
        'ciudad',
        'pais',
        'telefono',
        'celular',
        'email',
        'direccion'
    ];
}
