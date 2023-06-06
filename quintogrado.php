<?php
    require 'conexion.php';
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
    <script src="js/jquery-3.5.1.min.js"></script>
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
                            <img src="img/cct.png" alt="" style="margin-right: 10px;" width="18px">
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
                            <img src="img/reloj.png" alt="" style="margin-right: 10px;" width="18px">
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

    <!--Aquí comienza el main-->
    <main class="container" style="margin-top: 20px;">
        <div class="row g-4">
            <div class="col-md-8">
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Calificaciones de 5° A y 5° B</h1>
                <div class="col-md-12 table-responsive">
                    <?php
                    $sql = "SELECT * FROM quintoa";
                    $resultado = mysqli_query($conn, $sql);
                    ?>
                        <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                        Quinto año - grupo A
                        </h4>
                        <table class="col-md-12 table table-bordered table-success table-striped">
                        <thead>
                            <th>N° de lista</th>
                            <th>Nombre completo</th>
                            <th>1er Parcial</th>
                            <th>2do Parcial</th>
                            <th>3er Parcial</th>
                            <th>Promedio</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($registros = $resultado ->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $registros['nlista'];?></td>
                                <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                </div>
                <div class="col-md-12 table-responsive">
                    <?php
                    $sql = "SELECT * FROM quintob";
                    $resultado = mysqli_query($conn, $sql);
                    ?>
                        <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                        Quinto año - grupo B
                        </h4>
                        <table class="col-md-12 table table-bordered table-success table-striped">
                        <thead>
                            <th>N° de lista</th>
                            <th>Nombre completo</th>
                            <th>1er Parcial</th>
                            <th>2do Parcial</th>
                            <th>3er Parcial</th>
                            <th>Promedio</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($registros = $resultado ->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $registros['nlista'];?></td>
                                <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                </div>
            </div>

            <!--Aquí comienza el aside-->
            <aside class="col-md-4" style="padding-top: 40px;">
                <div class="position-sticky" style="top: 2rem; text-align: center;">
                    <div class="p-4 mb-3 bg-light rounded service hidden">
                        <h4 class="fst-italic">Director</h4>
                        <img src="img/descarga (1).png" width="80%" alt="">
                        <p class="mb-0">Profesor: Jorge Cadena Vergara</p>
                    </div>

                    <div class="p-4 service hidden">
                        <h4 class="fst-italic">Información</h4>
                        <p class="text-start">
                            La Escuela Primaria "Benito Juárez" es una institución educativa que destaca por su enfoque integral en la formación de sus estudiantes.
                            Ubicada en un entorno tranquilo y seguro, esta escuela se ha ganado una excelente reputación en la comunidad por brindar una educación
                            de calidad y promover valores fundamentales.
                        </p>
                    </div>
                </div>
            </aside>
            <!--Aquí termina el aside-->
        </div>
    </main>
    <!--Aquí termina el main-->

    <!--Inicia el footer-->
    <div class="container service hidden">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-secondary border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Victor Manuel Urquidez León</span>
            </div>
            <div class="col-md-4"></div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt="">
                        </a>
                </li>
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt="">
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt="">
                        </a>
                    </li>
                </ul>
            <div class="border-secondary border-top"></div>
        </footer>
    </div>
    <!--Aquí termina el footer-->

    <!--Scripts de JavaScript-->
    <script src="js/scroll.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
<?php
    mysqli_close($conn);
?>
</html>