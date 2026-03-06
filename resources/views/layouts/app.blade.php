<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Mascotas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color:#f5f7fa;
        }

        .navbar-brand{
            font-weight:bold;
            letter-spacing:1px;
        }

        .card{
            border:none;
            border-radius:12px;
        }

        .table{
            margin-top:15px;
        }

        footer{
            margin-top:40px;
        }

    </style>
</head>

<body>

<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="/mascotas">
                Fundación Mascotas
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/mascotas">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/mascotas/create">Registrar Mascota</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/solicitudes">Solicitudes</a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

</header>

<main class="container mt-4">

    <div class="card shadow-sm p-4">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif


        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Se encontraron errores:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif


        @yield('content')

    </div>

</main>


<footer class="text-dark text-center py-3">
    <p class="mb-0">©️ 2026 Fundación Mascotas. Todos los derechos reservados.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>