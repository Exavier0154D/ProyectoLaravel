<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          
          <h2 class="mb-4">Editar Proyecto: {{ $proyecto->nombre }}</h2>

          <form action="{{ route('projects.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT') 
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Título del Proyecto</label>
                <input class="form-control" name="nombre" id="nombre" type="text" 
                       placeholder="Ingrese el título del proyecto" 
                       value="{{ old('nombre', $proyecto->nombre) }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción del Proyecto</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>
                  {{ old('descripcion', $proyecto->descripcion) }}
                </textarea>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Actualizar Proyecto</button>
            </div>
          </form>

          <hr>
          
          <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" onsubmit="return confirm('¿Está seguro de que desea eliminar este proyecto?');">
              @csrf
              @method('DELETE')
              <div class="d-grid gap-2 mt-3">
                  <button type="submit" class="btn btn-danger">Eliminar Proyecto</button>
              </div>
          </form>

          <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>