<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Nuevo Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h2 class="mb-4 text-center">Crear Nuevo Proyecto</h2>

          <form action="{{ route('projects.store') }}" method="POST">
            @csrf 

            <div class="mb-3">
                <label for="nombre" class="form-label">Título del Proyecto</label>
                <input class="form-control" name="nombre" id="nombre" type="text" 
                       placeholder="Ingrese el título del proyecto" 
                       value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción del Proyecto</label> 
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>