<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalles del Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0">Detalles del Proyecto: {{ $proyecto->nombre }}</h2>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">ID</dt>
                            <dd class="col-sm-9">{{ $proyecto->id }}</dd>

                            <dt class="col-sm-3">Título</dt>
                            <dd class="col-sm-9">{{ $proyecto->nombre }}</dd>
                            
                            <dt class="col-sm-3">Descripción</dt>
                            <dd class="col-sm-9">{{ $proyecto->descripcion }}</dd>
                        </dl>
                        
                        <hr>
                        
                        <p class="text-muted mb-1">Fecha de Creación: {{ $proyecto->created_at }}</p>
                        <p class="text-muted mb-0">Última Actualización: {{ $proyecto->updated_at }}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn btn-warning">Editar Proyecto</a>
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Volver al Listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>