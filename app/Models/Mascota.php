<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = [
        'nombre',
        'especie',
        'raza',
        'edad',
        'genero',
        'tamaño',
        'estado_salud',
        'fecha_ingreso',
        'estado'
    ];
        
    //
}
