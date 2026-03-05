@extends('layouts.app')
@section('content')

    <h1>Registrar Nueva Mascota</h1>
    <form action="/mascotas" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="especie" class="form-label">Especie</label>
            <select class="form-select" id="especie" name="especie" required>
                <option value="">Seleccione una especie</option>
                <option value="canino">Canino</option>
                <option value="felino">Felino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="raza" class="form-label">Raza</label>
            <input type="text" class="form-control" id="raza" name="raza" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="">Seleccione un género</option>
                <option value="hembra">Hembra</option>
                <option value="macho">Macho</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tamano" class="form-label">Tamaño</label>
            <input type="text" class="form-control" id="tamano" name="tamaño" required>
        </div>
        <div class="mb-3">
            <label for="estado_salud" class="form-label">Estado de Salud</label>
            <input type="text" class="form-control" id="estado_salud" name="estado_salud" required>
        </div>
        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="">Seleccione un estado</option>
                <option value="disponible">Disponible</option>
                <option value="adoptado">Adoptado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Mascota</button>
    </form>





























@endsection