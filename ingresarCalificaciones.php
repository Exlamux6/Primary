<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="Es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Esc. Prim. Fed. Lic. Benito Juarez</title>
</head>

<body style="background-color:rgb(224, 224, 212)">
    <!--Inicia el header-->
    <header>
        <!-- Topbar Start -->
        <div class="container-fluid text-light p-0" id="TopbarStar">
            <div class="container ">
                <div class="row gx-0 d-none d-lg-flex">
                    <div class="col-lg-3 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <img src="img/cct.png" alt="" style="margin-right: 10px;">
                            <small>CCT: 12DPR2019N</small>
                        </div>
                    </div>
                    <div class="col-lg-3 text-end">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <small>
                                <script>
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-6 px-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center">
                            <img src="img/reloj.png" alt="" style="margin-right: 10px;">
                            <small>LUNES - VIERNES : 08:00 AM - 12:30 PM</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
    </header>
    <!--Aquí termina el header-->

    <!--Inicia el menú de navegación-->
    <nav>
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a href="#">
                        <img src="img/libro.png" alt="" width="40" style="margin-right: 10px;">
                    </a>
                    <a class="navbar-brand" id="nombrePrimaria" style="color: white;" href="#"> Esc. Prim. Fed. Benito Juarez</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link active" id="navegacion" style="color: white;" aria-current="page"
                                    href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link" style="color: white;" id="navegacion" href="acercade.html">Acerca de</a>
                            </li>
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link" style="color: white;" id="navegacion" href="ofertaeducativa.html">Oferta educativa</a>
                            </li>
                            <li class="nav-item dropdown" id="botonNav">
                                <a class="nav-link dropdown-toggle show.bs.dropdown" id="navegacion"
                                    id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                    style="color: white;" aria-expanded="false">
                                    Grupos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"
                                    style="background-image:  linear-gradient(80deg,#5f8788,#4b507c);">
                                <li><a class=" dropdown-item" href="primergrado.php">Primer Grado</a>
                                </li>
                                <li><a class="dropdown-item" href="segundogrado.php">Segundo Grado</a></li>
                                <li><a class="dropdown-item" href="tercergrado.php">Tercer Grado</a></li>
                                <li><a class="dropdown-item" href="cuartogrado.php">Cuarto Grado</a></li>
                                <li><a class="dropdown-item" href="quintogrado.php">Quinto Grado</a></li>
                                <li><a class="dropdown-item" href="sextogrado.php">Sexto Grado</a></li>
                        </ul>
                        </li>
                        <li class="nav-item" id="botonNav">
                            <a class="nav-link" style="color:white;" id="navegacion" href="contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item" id="botonNav">
                            <a class="nav-link" style="color:white;" id="navegacion" href="login.php"><img src="img/person-fill-gear.svg" width="22px" alt=""></a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!--Aquí termina el menú de navegación-->
    <?php
    $tabla = $_GET['table'];
    ?>

    <!--Aquí comienza el main-->
    <main class="container" style="margin-top: 20px;">
        <div class="row g-4">
            <div class="col-md-8">
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Contacto</h1>
                <form action="ingresarAlumnos.php" method="post">
                    <div class="col-md-12">
                    <input type="hidden" class="form-control" id="tabla" name="tabla" value="<?php echo $tabla; ?>">
                        <label for="numerodeLista">N° de lista</label>
                        <input type="number" class="form-control" id="nlista" name="nlista">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" required autocomplete="off" name="nombre" id="nombre" >
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="paterno">Apellido paterno</label>
                        <input type="text" class="form-control" required autocomplete="off" name="paterno" id="paterno" >
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="materno">Apellido materno</label>
                        <input type="text" class="form-control" required autocomplete="off" name="materno" id="materno">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="primerParcial">1er Parcial</label>
                        <input type="number" class="form-control" required autocomplete="off" name="pparcial" id="pparcial" step="any" min="0" max="10">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="primerParcial">2do Parcial</label>
                        <input type="number" class="form-control" required autocomplete="off" name="sparcial" id="sparcial" step="any" min="0" max="10">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="primerParcial">3er Parcial</label>
                        <input type="number" class="form-control" required autocomplete="off" name="tparcial" id="tparcial" step="any" min="0" max="10">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="primerParcial">Promedio</label>
                        <input type="number" class="form-control" required autocomplete="off" name="promedio" id="promedio" step="any" min="0" max="10">
                    </div> <br>

                    <button type="submit" class="btn btn-primary" name="actualizar" value="actualizar">Añadir</button>
                </form> <br> <br>

            </div>

            <!--Aquí comienza el aside-->
            <aside class="col-md-4" style="padding-top: 40px;">
                <div class="position-sticky" style="top: 2rem; text-align: center;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">Director</h4>
                        <img src="img/descarga (1).png" width="80%" alt="">
                        <p class="mb-0">Profesor: Jorge Cadena Vergara</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Fechas</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">March 2021</a></li>
                            <li><a href="#">February 2021</a></li>
                            <li><a href="#">January 2021</a></li>
                            <li><a href="#">December 2020</a></li>
                            <li><a href="#">November 2020</a></li>
                            <li><a href="#">October 2020</a></li>
                            <li><a href="#">September 2020</a></li>
                            <li><a href="#">August 2020</a></li>
                            <li><a href="#">July 2020</a></li>
                            <li><a href="#">June 2020</a></li>
                            <li><a href="#">May 2020</a></li>
                            <li><a href="#">April 2020</a></li>
                        </ol>
                    </div>
                </div>
            </aside>
            <!--Aquí termina el aside-->
        </div>
    </main>
    <!--Aquí termina el main-->

    <!--Inicia el footer-->
    <footer class="container">
        <div class="col-md-12">
        </div>
    </footer>
    <!--Aquí termina el footer-->

    <!--Scripts de JavaScript-->
    <script src="js/bootstrap.bundle.min.js"></script>

    <?php
    mysqli_close($conn);
    ?>
</body>
</html>