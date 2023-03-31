<?php
    require 'conexion.php';
    session_start();
    if (!isset($_SESSION['id'])) {
        header("Location: login.php");
    }
    $nombre = $_SESSION['nombre'];
    $tipo_usuario = $_SESSION['tipo_usuario'];
?>


<?php if ($tipo_usuario == 1) { ?>
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
        <div class="container-fluid">
            <footer class="d-flex container flex-wrap justify-content-between align-items-center py-1 my-1 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <img src="img/tic.png" alt="" width="150px">
                    </a>
                </div>

                <div class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <script>
                        var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                        var f = new Date();
                        document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
                </div>
            </footer>
        </div>
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
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Admin </h1>
                <a class="btn btn-success" href="salir.php">Salir de la sesión</a> <br> <br>
                <div class="col-md-8">
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Calificaciones de 1° A y 1° B</h1>
                    <div class="col-md-12">
                    <?php
                $sql = "SELECT * FROM primeroa";
                $resultado = mysqli_query($conn, $sql);
                ?>
                        <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                        Primer año - grupo A
                        </h4>
                        <table class="col-md-12 table table-bordered table-success table-striped">
                        <thead>
                            <th>N° de lista</th>
                            <th>Nombre</th>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Calificación</th>
                            <th colspan="2" class="text-center">Opciones</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($registros = $resultado ->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $registros['nlista'];?></td>
                                <td><?php echo $registros['nombre'];?></td>
                                <td><?php echo $registros['paterno']; ?></td>
                                <td><?php echo $registros['materno'];?></td>
                                <td><?php echo $registros['calificacion'];?></td>
                                <td><a class="btn btn-success" href="update.php?id=<?php echo $registros['id'] ?>">Editar</a></td>
                                <td> <a class="btn btn-danger" href="delete.php?id=<?php echo $registros['id'] ?>">Eliminar</a></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table>
                        <a href="ingresarCalificaciones.php" class="btn btn-primary">Ingresar alumnos</a>
                    </div>
            </div>
            <!--
                <a href="modificar1a.php" class="btn btn-primary">Primero A</a>
                <a href="modificar1b.php" class="btn btn-primary">Primero B</a><br> <br>
                <a href="modificar2a.php" class="btn btn-primary">Segunda A</a>
                <a href="modificar2b.php" class="btn btn-primary">Segundo B</a><br> <br>
                <a href="modificar3a.php" class="btn btn-primary">Tercero A</a>
                <a href="modificar3b.php" class="btn btn-primary">Tercero B</a><br> <br>
                <a href="modificar4a.php" class="btn btn-primary">Cuarto A</a>
                <a href="modificar4b.php" class="btn btn-primary">Cuarto B</a><br> <br>
                <a href="modificar5a.php" class="btn btn-primary">Quinto A</a>
                <a href="modificar5b.php" class="btn btn-primary">Quinto B</a><br> <br>
                <a href="modificar6a.php" class="btn btn-primary">Sexto A</a>
                <a href="modificar6b.php" class="btn btn-primary">Sexto B</a><br> <br>
                        -->
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
</body>

</html>

<?php }
    mysqli_close($conn);
?>