<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Listado de Proyectos</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Crear Nuevo Proyecto</a>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de Creación</th>
                            <th scope="col">Acciones</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{ $proyecto->id }}</th>
                            <td>{{ $proyecto->nombre }}</td>
                            <td>{{ $proyecto->descripcion }}</td>
                            <td>{{ $proyecto->created_at }}</td>
                            
                            <td>
                                <a href="{{ route('projects.show', $proyecto->id) }}" class="btn btn-info btn-sm me-2">Ver</a>

                                <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>

                                <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE') 
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('¿Está seguro de que desea eliminar este proyecto?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>