<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $table = 'solicitudes';

    protected $fillable = [
        'mascota_id',
        'nombre_solicitante',
        'correo_electronico',
        'telefono',
        'direccion',
        'motivo_adopcion',
        'fecha_solicitud',
        'estado'
    ];

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }
}