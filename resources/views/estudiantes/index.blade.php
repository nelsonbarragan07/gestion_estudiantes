<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <!-- Titulo y botón de crear -->
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="mb-0">Lista de Estudiantes</h1>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">
                <i class="bi bi-person-add me-2"></i>Crear Nuevo Estudiante
            </a>
        </div>
    </div>

    <!-- Tabla de estudiantes -->
    <div class="table-responsive shadow-sm">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->apellido }}</td>
                    <td>{{ $estudiante->correo }}</td>
                    <td>{{ $estudiante->telefono }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-outline-info btn-sm me-2">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-outline-warning btn-sm me-2">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este estudiante?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <nav aria-label="Paginación" class="mt-4">
        <ul class="pagination justify-content-center">
            @if ($estudiantes->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $estudiantes->previousPageUrl() }}">Anterior</a>
                </li>
            @endif

            @for ($i = 1; $i <= $estudiantes->lastPage(); $i++)
                <li class="page-item {{ $estudiantes->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $estudiantes->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            @if ($estudiantes->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $estudiantes->nextPageUrl() }}">Siguiente</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            @endif
        </ul>
    </nav>

</body>
</html>