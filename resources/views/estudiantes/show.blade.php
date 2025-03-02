<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Detalles del Estudiante</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $estudiante->nombre }}</h5>
            <p class="card-text">Apellido: {{ $estudiante->apellido }}</p>
            <p class="card-text">Correo: {{ $estudiante->correo }}</p>
            <p class="card-text">Teléfono: {{ $estudiante->telefono }}</p>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver</a>
        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</body>
</html>