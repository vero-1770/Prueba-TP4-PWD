<!-- Inicio Header  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba TP 4</title>
    <!-- Bootstrap CDN CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-6 bg-danger">
            <h2>HOLA MUNDO</h2>
        </div>
        <div class="col-6 bg-warning">
            <h2>HOLA MUNDO</h2>
        </div>
    </div>
</div>

<main class="container mt-5 d-flex flex-column min-vh-100">
        <section class="card shadow p-4">
            <form class="needs-validation" novalidate action="../acciones/resultado.php" id="loginForm" method="get" enctype="multipart/form-data">
                            <h2 class="mb-4 text-primary">Busqueda de Persona</h2>

                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <label for="validacionNombre" class="form-label">Nombre:</label>
                                    <input type="text" id="validacionNombre" name="nombre" class="form-control" required>
                                    <div class="invalid-feedback" id="nombreInvalid"></div>
                                    <div class="valid-feedback" id="nombreValid"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="validacionApellido" class="form-label">Apellido:</label>
                                    <input type="text" id="validacionApellido" name="apellido" class="form-control" required>
                                    <div class="invalid-feedback" id="apellidoInvalid"></div>
                                    <div class="valid-feedback" id="apellidoValid"></div>
                                </div>
                            </div> 
                <div class="d-flex gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>            
        </form>
    </section>
    <!-- Validador para formularios -->
    <script src="../assets/funciones/validarInicio.js"></script>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>