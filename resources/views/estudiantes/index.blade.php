<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Crear Nuevo Estudiante</a>

    <table class="table table-bordered">
        <thead>
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
                <td>
                    <a href="{{ route('estudiantes.show', $estudiante) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>