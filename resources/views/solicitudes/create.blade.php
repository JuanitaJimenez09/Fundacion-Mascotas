@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Solicitud de Adopción</h1>
    <form action="/solicitudes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre_solicitante" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="correo_electronico" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
        </div>
        <div class="mb-3">
            <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
            <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" required>
        </div>
        <div class="mb-3">
            <label for="motivo_adopcion" class="form-label">Motivo de Adopción</label>
            <textarea class="form-control" id="motivo_adopcion" name="motivo_adopcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="mascota_id" class="form-label">Mascota a Adoptar</label>
            <select class="form-select" id="mascota_id" name="mascota_id" required>
                <option value="">Seleccione una mascota</option>

                @foreach($mascotas as $mascota)
                <option value="{{ $mascota->id }}">
                    {{ $mascota->raza }} - {{ $mascota->nombre }} - {{ $mascota->edad }} años
                </option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
    </form>
</div>
@endsection