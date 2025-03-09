<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Estudiante</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title mb-0"><i class="bi bi-person-plus me-2"></i>Crear Nuevo Estudiante</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('estudiantes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label"><i class="bi bi-person me-2"></i>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del estudiante" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label"><i class="bi bi-person me-2"></i>Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese los apellidos del estudiante" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label"><i class="bi bi-envelope-at me-2"></i>Correo Electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label"><i class="bi bi-telephone me-2"></i>Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el número celular del estudiante" required>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary me-2"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
                    <button type="submit" class="btn btn-success"><i class="bi bi-save me-2"></i>Guardar</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>