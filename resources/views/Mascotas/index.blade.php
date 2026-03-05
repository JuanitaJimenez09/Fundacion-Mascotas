@extends('layouts.app')
@section('content')
@if($mascotas->isEmpty())
<div class="alert alert-info">
    No hay mascotas registradas en la fundación.
</div>
@else
<h1>Lista de Mascotas</h1>
<a href="/mascotas/create" class="btn btn-dark mb-3 my-2">Registrar Nueva Mascota</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Tamaño</th>
            <th>Estado de Salud</th>
            <th>Fecha de Ingreso</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ ucfirst($mascota->especie) }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->edad }} años</td>
            <td>{{ ucfirst($mascota->genero) }}</td>
            <td>{{ ucfirst($mascota->tamaño) }}</td>
            <td>{{ $mascota->estado_salud }}</td>
            <td>{{ \Carbon\Carbon::parse($mascota->fecha_ingreso)->format('d/m/Y') }}</td>
            <td>{{ ucfirst($mascota->estado) }}</td>
            <td><a href="/mascotas/show/{{ $mascota->id }}" class="btn btn-info btn-sm">Ver</a>
                <a href="/mascotas/edit/{{ $mascota->id }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="/mascotas/delete/{{ $mascota->id }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta mascota?')">Eliminar</button>
                </form>

            </td>



        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection