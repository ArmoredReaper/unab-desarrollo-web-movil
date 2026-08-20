<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos</title>
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
            <!-- Carousel -->
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"></button>
                </div>

                <!-- Carousel contents -->
                <div class="carousel-inner" style="height:40vh">
                    <div class="carousel-item active">
                        <img class="d-block w-100" style="object-fit:cover; height:40vh" src="https://media.istockphoto.com/id/1546442230/photo/front-view-skin-care-products-on-wooden-decorative-piece.webp?s=2048x2048&w=is&k=20&c=bJzRs0dM28Rm3sT8vBRMa9Mzb1WLUtMXqX6GQZGJ8Is=" alt="Producto 1">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="object-fit:cover; height:40vh" src="https://media.istockphoto.com/id/1397790017/photo/a-close-up-view-of-an-unrecognizable-females-hand-holding-some-beauty-product.webp?s=2048x2048&w=is&k=20&c=xTpB5S7QCkiVqt__Zwxx8pnoO5EG8TMWV0bT1raAjI8=" alt="Producto 2">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" style="object-fit:cover; height:40vh" src="https://media.istockphoto.com/id/941410386/photo/distribution-warehouse-logistics-packaged-parcels-ready-for-shipment-and-delivery.webp?s=2048x2048&w=is&k=20&c=pO74gTI0sdqPA3gFEIX3TeCM_9zcZb29Y-I_81j8cOs=" alt="Producto 3">
                    </div>
                </div>

                <!-- Carousel controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Cards -->
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 1">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 2">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 2</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 3">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 3</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 4">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 5">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 5</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/1209516909/vector/washing-detergent-thin-line-icon-detergent-container-vector-illustration-isolated-on-white.webp?s=2048x2048&w=is&k=20&c=KsNgcpl7GRmAy9fNjfMO_ijJldhvvVoWi40rSZN2J0o=" alt="Producto 6">
                            <div class="card-body">
                                <h5 class="card-title text-center">Producto 6</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="card-footer text-muted text-center">
                                No disponible
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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