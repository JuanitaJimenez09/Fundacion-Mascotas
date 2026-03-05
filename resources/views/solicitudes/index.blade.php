@extends('layouts.app')
@section('content')
<h1 class="py-4">Lista de Solicitudes</h1>
<a href="/solicitudes/create" class="btn btn-dark mb-3 my-2">Registrar Nueva Solicitud</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del Solicitante</th>
            <th>Correo Electrónico</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha de Solicitud</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{ $solicitud->id }}</td>
            <td>{{ $solicitud->nombre_solicitante }}</td>
            <td>{{ $solicitud->correo_electronico }}</td>
            <td>{{ $solicitud->telefono }}</td>
            <td>{{ $solicitud->direccion }}</td>
            <td>{{ $solicitud->fecha_solicitud }}</td>
            <td>
               <a href="/solicitudes/show/{{ $solicitud->id }}" class="btn btn-info btn-sm">Ver Detalles</a>
               <a href="/solicitudes/edit/{{ $solicitud->id }}" class="btn btn-success btn-sm">Editar</a>
                <form action="/solicitudes/delete/{{ $solicitud->id }}" method="POST" style="display:inline-block;">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta solicitud?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>    
@endsection