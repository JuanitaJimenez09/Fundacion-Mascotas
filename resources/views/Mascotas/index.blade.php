@extends('layouts.app')

@section('content')

@if($mascotas->isEmpty())

<div class="alert alert-info text-center">
    No hay mascotas registradas en la fundación.
</div>

@else

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Mascotas de la Fundación</h2>

    <a href="/mascotas/create" class="btn btn-outline-primary">
        Registrar Nueva Mascota
    </a>

</div>

<div class="table-responsive">

<table class="table table-hover table-bordered align-middle shadow-sm">

    <thead class="table-dark text-center">

        <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Tamaño</th>
            <th>Estado Salud</th>
            <th>Fecha Ingreso</th>
            <th>Estado</th>
            <th style="width:200px;">Acciones</th>
        </tr>

    </thead>

    <tbody>

        @foreach($mascotas as $mascota)

        <tr>

            <td class="fw-semibold">{{ $mascota->nombre }}</td>

            <td>{{ ucfirst($mascota->especie) }}</td>

            <td>{{ $mascota->raza }}</td>

            <td class="text-center">
                {{ $mascota->edad }} años
            </td>

            <td class="text-center">
                {{ ucfirst($mascota->genero) }}
            </td>

            <td class="text-center">
                {{ ucfirst($mascota->tamaño) }}
            </td>

            <td>{{ $mascota->estado_salud }}</td>

            <td class="text-center">
                {{ \Carbon\Carbon::parse($mascota->fecha_ingreso)->format('d/m/Y') }}
            </td>

            <td class="text-center">

                @if($mascota->estado == 'disponible')

                <span class="badge bg-success">
                    Disponible
                </span>

                @else

                <span class="badge bg-secondary">
                    Adoptado
                </span>

                @endif

            </td>

            <td class="text-center">

                <a href="/mascotas/show/{{ $mascota->id }}"
                class="btn btn-outline-primary btn-sm">
                    Ver
                </a>

                <a href="/mascotas/edit/{{ $mascota->id }}"
                class="btn btn-outline-warning btn-sm">
                    Editar
                </a>

                <form action="/mascotas/delete/{{ $mascota->id }}"
                    method="POST"
                    style="display:inline-block;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                    class="btn btn-outline-danger btn-sm"
                    onclick="return confirm('¿Estás seguro de que deseas eliminar esta mascota?')">

                        Eliminar

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endif

@endsection