<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Servicios</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>        
        <script src="https://kit.fontawesome.com/b2583a4128.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><i class="fa-solid fa-building"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php#quienesSomos">Quiénes somos</a></li>
                                <li><a class="dropdown-item" href="empresa.php#nuestroEquipo">Nuestro equipo</a></li>
                                <li><a class="dropdown-item" href="empresa.php#mision">Misión</a></li>
                                <li><a class="dropdown-item" href="empresa.php#vision">Visión</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accederModal">Acceder</button>
            </div>
        </nav>

        <!-- Main container -->
        <div class="container">
            <h5 class="display-5 mt-2">Nuestros servicios</h5>
            <hr class="mt-1 mb-2">
        </div>

        <!-- Footer -->
        <div class="container-fluid bg-dark mt-4 py-4">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" style="text-align: center;">
                    <span style="color: white">Empresa de prueba</span><br>
                    <span style="color: gray">2026</span>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </body>
</html>