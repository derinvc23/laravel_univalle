<!DOCTYPE html>
<html>
<head>
    <title>Mi CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <nav class="mb-4">
            <a href="{{ url('/') }}" class="btn btn-primary">Inicio</a>
            <a href="{{ route('productos.index') }}" class="btn btn-success">Productos</a>
        </nav>

        @yield('content')
    </div>
</body>
</html>

