@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4">Detalles de la Solicitud</h1>

    <div class="card shadow">
        <div class="card-body">
            <div class="row align-items-center">
                
                <div class="col-md-6">
                    <p><strong>Nombre del Solicitante:</strong> {{ $solicitudes->nombre_solicitante }}</p>
                    <p><strong>Correo Electrónico:</strong> {{ $solicitudes->correo_electronico }}</p>
                    <p><strong>Teléfono:</strong> {{ $solicitudes->telefono }}</p>
                    <p><strong>Dirección:</strong> {{ $solicitudes->direccion }}</p>
                    <p><strong>Fecha de Solicitud:</strong> {{ $solicitudes->fecha_solicitud }}</p>
                    <p><strong>Motivo de Adopción:</strong> {{ $solicitudes->motivo_adopcion }}</p>
                </div>

                <div class="col-md-6 text-center">
                    <img src="https://static.vecteezy.com/system/resources/previews/010/882/587/non_2x/woman-avatar-person-female-illustration-icon-character-face-portrait-woman-avatar-cartoon-girl-user-human-profile-isolated-white-adult-icon-office-headshot-employee-face-head-clipart-vector.jpg" 
                         alt="Foto Persona" 
                         class="img-fluid rounded shadow"
                         style="max-width: 250px;">
                </div>

            </div>
        </div>

    <hr>

        <div class="d-flex gap-3 mt-3">
            
            <!-- BOTÓN APROBAR -->
            <form action="{{ route('solicitudes.aprobar', $solicitudes->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success">
                    ✅ Aprobar Solicitud
                </button>
            </form>

            <!-- BOTÓN RECHAZAR -->
            <form action="{{ route('solicitudes.rechazar', $solicitudes->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger">
                    ❌ Rechazar Solicitud
                </button>
            </form>

</div>
    </div>
</div>
@endsection