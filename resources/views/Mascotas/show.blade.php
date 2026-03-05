@extends('layouts.app')
@section('content')
<h1>Información de la Mascota</h1>
<div class="row">
    <div class="col-md-6">
        <img src="https://i.pinimg.com/236x/9d/9f/41/9d9f414c561cfd818f08211803500d27.jpg" alt="Foto de la mascota" class="img-fluid rounded">
        <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
        <p><strong>Especie:</strong> {{ ucfirst($mascota->especie) }}</p>
        <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
        <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>
    </div>
    <div class="col-md-6">
        <p><strong>Género:</strong> {{ ucfirst($mascota->genero) }}</p>
        <p><strong>Tamaño:</strong> {{ ucfirst($mascota->tamaño) }}</p>
        <p><strong>Estado de Salud:</strong> {{ $mascota->estado_salud }}</p>
        <p><strong>Fecha de Ingreso:</strong> {{ \Carbon\Carbon::parse($mascota->fecha_ingreso)->format('d/m/Y') }}</p>
    </div>
</div>





@endsection