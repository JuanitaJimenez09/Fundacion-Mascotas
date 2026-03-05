@extends('layouts.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 <form action="/mascotas/update/{{ $mascota->id }}" method="POST">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <div class="container mt-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $mascota->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select" id="especie" name="especie" required>
                <option value="">Seleccione una especie</option>
                <option value="canino" {{ $mascota->especie == 'canino' ? 'selected' : '' }}>Canino</option>
                <option value="felino" {{ $mascota->especie == 'felino' ? 'selected' : '' }}>Felino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="raza" class="form-label">Raza</label>
            <input type="text" class="form-control" id="raza" name="raza" value="{{ $mascota->raza }}" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="{{ $mascota->edad }}" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="">Seleccione un género</option>
                <option value="hembra" {{ $mascota->genero == 'hembra' ? 'selected' : '' }}>Hembra</option>
                <option value="macho" {{ $mascota->genero == 'macho' ? 'selected' : '' }}>Macho</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tamaño" class="form-label">Tamaño</label>
            <input type="text" class="form-control" id="tamaño" name="tamaño" value="{{ $mascota->tamaño }}" required>
        </div>
        <div class="mb-3">
            <label for="estado_salud" class="form-label">Estado de Salud</label>
            <input type="text" class="form-control" id="estado_salud" name="estado_salud" value="{{ $mascota->estado_salud }}" required>
        </div>
        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="{{ $mascota->fecha_ingreso }}" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="">Seleccione un estado</option>
                <option value="disponible" {{ $mascota->estado == 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="adoptado" {{ $mascota->estado == 'adoptado' ? 'selected' : '' }}>Adoptado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Mascota</button>
    </form>