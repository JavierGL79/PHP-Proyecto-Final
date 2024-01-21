<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... otros elementos del encabezado ... -->

    <!-- Incluir los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    @section('header')
    <header>
        @section('title')
        <h1><a class="navbar-brand" href="/">Fantasy Books</a></h1>
        
    <!-- Barra de navegación superior -->
    @section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/registro">Nuevo Usuario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Buscar</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    @show
    <!-- Contenido de la página -->
    @yield('content')

    <!-- Scripts de Bootstrap (opcional) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-ME2hRMqU9WEccgVdKCy8de9JbqD6Bf/PQdPyaW38IhEAiCz1zBL1xg5fbXVEHNLJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6zIn1yHd8Y5Kn0Wr9z23azxFQENuYTKOBZK6S" crossorigin="anonymous"></script>
</body>
</html>
