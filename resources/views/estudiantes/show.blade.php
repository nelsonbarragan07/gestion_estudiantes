<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Detalles del Estudiante</h1>
    
    <!-- Tarjeta con detalles del estudiante -->
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title mb-0">
                <i class="bi bi-person-circle me-2"></i>{{ $estudiante->nombre }} {{ $estudiante->apellido }}
            </h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong><i class="bi bi-envelope me-2"></i>Correo:</strong> {{ $estudiante->correo }}</p>
            <p class="card-text"><strong><i class="bi bi-telephone me-2"></i>Teléfono:</strong> {{ $estudiante->telefono }}</p>
        </div>
        <div class="card-footer bg-light">
            <!-- Botones de acción -->
            <div class="d-flex justify-content-between">
                <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Volver
                </a>
                <div>
                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-outline-warning me-2">
                        <i class="bi bi-pencil me-2"></i>Editar
                    </a>
                    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de eliminar este estudiante?')">
                            <i class="bi bi-trash me-2"></i>Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>