<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('mascota_id');
        $table->string('nombre_solicitante');
        $table->string('correo_electronico');   // AGREGAR
        $table->string('telefono');
        $table->string('direccion');
        $table->text('motivo_adopcion');
        $table->date('fecha_solicitud');        // AGREGAR
        $table->enum('estado', ['pendiente', 'aprobada', 'rechazada']);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
