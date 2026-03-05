@extends('layouts.app')
@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <h1>Editar Solicitud</h1>
      <form action="/solicitudes/update/{{ $solicitudes->id }}" method="POST">
        @csrf
        @method('PUT')
         <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombre" name="nombre_solicitante" value="{{ $solicitudes->nombre_solicitante }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="correo_electronico" value="{{ $solicitudes->correo_electronico }}"           required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Número de Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $solicitudes->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $solicitudes->direccion }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_solicitud" class="form-label">Fecha de Solicitud</label>
            <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" value="{{ $solicitudes->fecha_solicitud }}" required>
        </div>
        <div class="mb-3">
            <label for="motivo_adopcion" class="form-label">Motivo de Adopción</label>
            <textarea class="form-control" id="motivo_adopcion" name="motivo_adopcion" rows="3" required>{{ $solicitudes->motivo_adopcion }}</textarea>
        </div>
        <div class="mb-3">
            <label for="mascota_id" class="form-label">Mascota a Adoptar</label>
            <select class="form-select" id="mascota_id" name="mascota_id" required>
                <option value="">Seleccione una mascota</option>

                @foreach($mascotas as $mascota)
                <option value="{{ $mascota->id }}" {{ $solicitudes->mascota_id == $mascota->id ? 'selected' : '' }}>
                    {{ $mascota->raza }} - {{ $mascota->nombre }} - {{ $mascota->edad }} años
                </option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Editar Solicitud</button>
    </form>
</div>
@endsection