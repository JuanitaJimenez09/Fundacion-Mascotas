<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model

{
    
   protected $fillable = [
        'mascota_id',
        'nombre_solicitante',
        'correo_electronico',
        'telefono',
        'direccion',
        'motivo_adopcion',
        'fecha_solicitud',
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
    

}
