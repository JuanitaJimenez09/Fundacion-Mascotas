@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="fw-bold">Solicitudes de Adopción</h2>

    <a href="/solicitudes/create" class="btn btn-outline-primary">
        Registrar Nueva Solicitud
    </a>

</div>

<div class="table-responsive">

<table class="table table-hover table-bordered align-middle shadow-sm">

    <thead class="table-dark text-center">

        <tr>
            <th>ID</th>
            <th>Solicitante</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Fecha</th>
            <th style="width:220px;">Acciones</th>
        </tr>

    </thead>

    <tbody>

        @foreach($solicitudes as $solicitud)

        <tr>

            <td class="text-center">{{ $solicitud->id }}</td>

            <td>{{ $solicitud->nombre_solicitante }}</td>

            <td>{{ $solicitud->correo_electronico }}</td>

            <td>{{ $solicitud->telefono }}</td>

            <td>{{ $solicitud->direccion }}</td>

            <td class="text-center">
                {{ \Carbon\Carbon::parse($solicitud->fecha_solicitud)->format('d/m/Y') }}
            </td>

            <td class="text-center">

                <a href="/solicitudes/show/{{ $solicitud->id }}"
                class="btn btn-outline-info btn-sm">
                    Ver
                </a>

                <a href="/solicitudes/edit/{{ $solicitud->id }}"
                class="btn btn-outline-warning btn-sm">
                    Editar
                </a>

                <form action="/solicitudes/delete/{{ $solicitud->id }}"
                    method="POST"
                    style="display:inline-block;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                    class="btn btn-outline-danger btn-sm"
                    onclick="return confirm('¿Estás seguro de eliminar esta solicitud?')">

                        Eliminar

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>

@endsection