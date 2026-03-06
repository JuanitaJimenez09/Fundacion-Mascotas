@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h1 class="mb-4 text-center">Información de la Mascota</h1>

    <div class="card shadow-sm">
        <div class="row g-0">

            <!-- Imagen -->
            <div class="col-md-5">
                <img src="https://media.istockphoto.com/id/489272417/es/foto/gato-y-perro-conjunto.jpg?s=612x612&w=0&k=20&c=doJGqQJjlRwxYeldeFnkjLsL2svM135ag6ZyswQ_oG8="
                     alt="Foto de la mascota"
                     class="img-fluid rounded-start h-100 object-fit-cover">
            </div>

            <!-- Información -->
            <div class="col-md-7">
                <div class="card-body">

                    <h2 class="card-title fw-bold text-dark mb-2">
                    🐾 {{ $mascota->nombre }}
                    </h2>
                    <hr class="mb-3">

                    <p><strong>Especie:</strong> {{ ucfirst($mascota->especie) }}</p>

                    <p><strong>Raza:</strong> {{ $mascota->raza }}</p>

                    <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>

                    <p><strong>Género:</strong> {{ ucfirst($mascota->genero) }}</p>

                    <p><strong>Tamaño:</strong> {{ ucfirst($mascota->tamaño) }}</p>

                    <p><strong>Estado de Salud:</strong>
                        <span class="badge bg-success">
                            {{ $mascota->estado_salud }}
                        </span>
                    </p>

                    <p><strong>Fecha de Ingreso:</strong>
                        {{ \Carbon\Carbon::parse($mascota->fecha_ingreso)->format('d/m/Y') }}
                    </p>

                    <div class="mt-4">

                        <a href="/mascotas"
                           class="btn btn-outline-secondary btn-sm">
                            Volver
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection