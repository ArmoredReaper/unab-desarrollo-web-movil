<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Página principal</title>
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
            <div class="jumbotron">
                <h1 class="display-4">Empresa de prueba</h1>
                <p class="lead">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                <hr class="my-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec quam quis tortor iaculis facilisis eu vel diam. Aenean urna nisl, euismod at porta ut, mollis nec diam. Proin lobortis lobortis leo, quis viverra nunc tempus id. Nam non quam pharetra, dignissim nunc ut, ullamcorper eros. Cras sodales mollis mattis. In hac habitasse platea dictumst.</p>
            </div>
            <div class="card-deck row">
                <div class="col-xs-6 col-sm-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="..." alt="Imagen Tarjeta 1">
                        <div class="card-body">
                            <h4 class="card-title">Productos</h4>
                            <hr class="my-1">
                            <p class="card-text">Aenean sagittis, dui et dignissim tincidunt, nunc orci scelerisque leo, a iaculis nibh nisi et sem.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="productos.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="..." alt="Imagen Tarjeta 2">
                        <div class="card-body">
                            <h4 class="card-title">Servicios</h4>
                            <hr class="my-1">
                            <p class="card-text"> Pellentesque vulputate, eros eu condimentum tincidunt, leo elit vulputate augue, sit amet dictum mi turpis ut arcu.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="servicios.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="..." alt="Imagen Tarjeta 3">
                        <div class="card-body">
                            <h4 class="card-title">Contacto</h4>
                            <hr class="my-1">
                            <p class="card-text">Aliquam mollis ex elit, non luctus elit semper sit amet. Ut sodales odio nec faucibus tristique.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="contacto.php" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
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

        <!-- Modal -->
        <div class="modal fade" id="accederModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticación</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="empresa.php">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña" name="pwd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember">Recordar contraseña
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Acceder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>