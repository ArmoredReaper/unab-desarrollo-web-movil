<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Empresa</title>
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
            <div class="row">
                <img class="w-100 img-responsive" style="object-fit:none; object-position:center; height:400px; width:100%" src="https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg" alt="Imagen de referencia">
            </div>
            
            <!-- Quienes somos -->
            <div id="quienesSomos" class="container-fluid mt-4">
                <h5 class="display-5">Quiénes somos</h5>
                <hr class="my-3">
                <p>Pellentesque ipsum diam, condimentum id nisi vitae, condimentum sagittis nisl. Etiam eleifend non neque non rhoncus. Nullam dignissim, nibh ac lacinia pharetra, mi ligula laoreet ante, fringilla fermentum diam tortor sed nibh. Etiam scelerisque libero est, tempus tincidunt erat rhoncus quis. Ut vulputate leo at metus blandit, et condimentum tortor varius.</p>
            </div>

            <!-- Nuestro equipo -->
            <div id="nuestroEquipo" class="container-fluid mt-4">
                <h5 class="display-5">Nuestro equipo</h5>
                <hr class="my-3">
                <div class="container mw-75">
                    <div class="row justify-content-center">
                        <div class="card col-2 h-100 mx-2">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/2171382633/vector/user-profile-icon-anonymous-person-symbol-blank-avatar-graphic-vector-illustration.webp?s=2048x2048&w=is&k=20&c=b_jPJtKaMniqqQD9cN60Ye3WRjfNFnrjtWND3x7k2IQ=" alt="Miembro 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Miembro 1</h5>
                                <p class="card-text" style="color:gray">Cargo del miembro 1</p>
                            </div>
                        </div>
                        <div class="card col-2 h-100 mx-2">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/2171382633/vector/user-profile-icon-anonymous-person-symbol-blank-avatar-graphic-vector-illustration.webp?s=2048x2048&w=is&k=20&c=b_jPJtKaMniqqQD9cN60Ye3WRjfNFnrjtWND3x7k2IQ=" alt="Miembro 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Miembro 2</h5>
                                <p class="card-text" style="color:gray">Cargo del miembro 2</p>
                            </div>
                        </div>
                        <div class="card col-2 h-100 mx-2">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/2171382633/vector/user-profile-icon-anonymous-person-symbol-blank-avatar-graphic-vector-illustration.webp?s=2048x2048&w=is&k=20&c=b_jPJtKaMniqqQD9cN60Ye3WRjfNFnrjtWND3x7k2IQ=" alt="Miembro 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Miembro 3</h5>
                                <p class="card-text" style="color:gray">Cargo del miembro 3</p>
                            </div>
                        </div>
                        <div class="card col-2 h-100 mx-2">
                            <img class="card-img-top" src="https://media.istockphoto.com/id/2171382633/vector/user-profile-icon-anonymous-person-symbol-blank-avatar-graphic-vector-illustration.webp?s=2048x2048&w=is&k=20&c=b_jPJtKaMniqqQD9cN60Ye3WRjfNFnrjtWND3x7k2IQ=" alt="Miembro 1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Miembro 4</h5>
                                <p class="card-text" style="color:gray">Cargo del miembro 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mision -->
            <div id="mision" class="container-fluid mt-4">
                <h5 class="display-5">Nuestra misión</h5>
                <hr class="my-3">
                <div class="row justify-content-around">
                    <img class="col-4 img-thumbnail" src="https://media.istockphoto.com/id/1916729901/photo/meeting-success-two-business-persons-shaking-hands-standing-outside.webp?s=2048x2048&w=is&k=20&c=bYChqz5TidOxM4mhS7tpPIKk29SitOPWw6eOv2PsJkE=" alt="Misión">
                    <p class="col-7 ml-4">Mauris ornare a libero vel pellentesque. Cras imperdiet justo in lacus pretium, a cursus risus euismod. Nullam molestie vulputate risus eget sollicitudin. Duis sagittis, dui interdum fringilla facilisis, lacus velit mollis lectus, ut rutrum sem magna sit amet nisi. Suspendisse in metus in felis hendrerit fermentum. Suspendisse eu lectus ultricies, sagittis erat vel, ultrices dui. Vestibulum dapibus orci mi, a elementum massa interdum dictum. Nullam varius, justo sed mattis semper, enim neque cursus augue, in interdum eros ante eu est. Fusce sit amet libero nibh. </p>
                </div>
            </div>

            <!-- Vision -->
            <div id="vision" class="container-fluid mt-4">
                <h5 class="display-5">Nuestra visión</h5>
                <hr class="my-3">
                <div class="row justify-content-around">
                    <ul class="col-7 mr-4">
                        <li>Sed eget mauris ac turpis mattis porta.</li>
                        <li>Curabitur efficitur arcu aliquam, congue magna eget, venenatis ligula.</li>
                        <li>Duis in justo ut nunc auctor facilisis vitae ut felis.</li>
                        <li>Morbi lobortis purus non vehicula lobortis.</li>
                    </ul>
                    <img class="col-4 img-thumbnail" src="https://media.istockphoto.com/id/1916729901/photo/meeting-success-two-business-persons-shaking-hands-standing-outside.webp?s=2048x2048&w=is&k=20&c=bYChqz5TidOxM4mhS7tpPIKk29SitOPWw6eOv2PsJkE=" alt="Visión">
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