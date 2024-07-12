<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Notas de Alumnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        <a class="nav-link" href="{{ route('alumnos.create') }}">Ingreso</a>
        <a class="nav-link" href="{{ route('alumnos.index') }}">Listado</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
