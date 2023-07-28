<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['tipo_usuario'];
?>


<?php if($tipo_usuario == 1 || $tipo_usuario == 2 || $tipo_usuario == 3|| $tipo_usuario == 4|| $tipo_usuario == 5 || $tipo_usuario == 6 || $tipo_usuario == 7 || $tipo_usuario == 8 || $tipo_usuario == 9 || $tipo_usuario == 10 || $tipo_usuario == 11 || $tipo_usuario == 12 || $tipo_usuario == 13) { ?>
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item" id="botonNav">
                                    <a class="nav-link active" id="navegacion" style="color: white;" aria-current="page" href="admin.php">
                                        Calificaciones
                                    </a>
                                </li>
                                <?php } if ($tipo_usuario == 1) { ?>
                                <li class="nav-item" id="botonNav">
                                    <a class="nav-link" style="color: white;" id="navegacion" href="comentarios.php">
                                        Comentarios
                                    </a>
                                </li>
                                <li class="nav-item dropdown" id="botonNav">
                                    <a class="nav-link dropdown-toggle show.bs.dropdown" id="navegacion" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                                    <span>Publicaciones</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="btn btn-success dropdown-item"  href="publicarnoticias.php">
                                                Publicar noticias
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success dropdown-item"  href="editarnoticias.php">
                                                Editar noticias
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success dropdown-item" href="imageneslider.php">
                                                Publicar sección de imágenes
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success dropdown-item" href="actualizar_slider.php">
                                                Editar sección de imágenes
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown" id="botonNav">
                                    <a class="nav-link dropdown-toggle show.bs.dropdown" id="navegacion" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                                    <span>Usuarios</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="btn btn-success dropdown-item"  href="crearUsuarios.php">
                                                Crear usuarios
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success dropdown-item" href="verUsuarios.php">
                                                Ver usuarios
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php } if ($tipo_usuario == 1 || $tipo_usuario == 2 || $tipo_usuario == 3|| $tipo_usuario == 4|| $tipo_usuario == 5|| $tipo_usuario == 6) { ?>
                                <li class="nav-item dropdown" id="botonNav">
                                    <a class="nav-link dropdown-toggle show.bs.dropdown" id="navegacion" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                                    <img src="img/gear-wide-connected.svg" alt="" class="avatar img-fluid rounded-circle me-1" style="fill: #FFF;">
                                    <span>Administrador</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="btn btn-success dropdown-item" href="salir.php">Salir de la sesión</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
        <!--Aquí termina el menú de navegación-->

        <!--Aquí comienza el main-->
        <div class="col-md-12">
            <h1 class="display-5 text-center text-dark mb-5 pb-2 border-bottom border-3 border-dark">Panel de Administración</h1>
        </div>
        <main class="container" style="margin-top: 20px;">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Calificaciones de los alumnos</h1>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php } if ($tipo_usuario == 2 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" id="primeroa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Ver calificaciones de 1° A
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 2){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM primeroa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Primer año - grupo A
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "primeroa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "primeroa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "primeroa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <?php } if ($tipo_usuario == 3 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" id="primerob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Ver calificacion de 1° B
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 3){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM primerob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Primer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr><td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "primerob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "primerob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "primerob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <?php } if ($tipo_usuario == 4 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" id="segundoa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Ver calificación de 2° A
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 4){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM segundoa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Segundo año - grupo A
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "segundoa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "segundoa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "segundoa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <?php } if ($tipo_usuario == 5 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" id="segundob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Ver calificación de 2° B
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 5){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM segundob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Segundo año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "segundob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "segundob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "segundob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <?php } if ($tipo_usuario == 6 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                    <button class="accordion-button collapsed" id="terceroa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Ver calificación de 3° A
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 6){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM terceroa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo A
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "terceroa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "terceroa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "terceroa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <br>
                            <?php } if ($tipo_usuario == 7 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSix">
                                    <button class="accordion-button collapsed" id="tercerob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Ver calificación de 3° B
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 7){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM tercerob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "tercerob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "tercerob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "tercerob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 8 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingSeven">
                                    <button class="accordion-button collapsed" id="cuartoa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        Ver calificación de 4° A
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 8){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM cuartoa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Cuarto año - grupo A
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "cuartoa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "cuartoa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "cuartoa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 9 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOcho">
                                    <button class="accordion-button collapsed" id="cuartob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOcho" aria-expanded="false" aria-controls="flush-collapseOcho">
                                        Ver calificación de 4° B
                                    </button>
                                </h2>
                                <div id="flush-collapseOcho" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 9){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingOcho" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM cuartob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "cuartob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "cuartob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "cuartob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 10 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingNine">
                                    <button class="accordion-button collapsed" id="quintoa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                        Ver calificación de 5° A
                                    </button>
                                </h2>
                                <div id="flush-collapseNine" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 10){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM quintoa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "quintoa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "quintoa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "quintoa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 11 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTen">
                                    <button class="accordion-button collapsed" id="quintob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                        Ver calificación de 5° B
                                    </button>
                                </h2>
                                <div id="flush-collapseTen" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 11){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM quintob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "quintob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "quintob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "quintob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 12 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingEleven">
                                    <button class="accordion-button collapsed" id="sextoa" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                        Ver calificación de 6° A
                                    </button>
                                </h2>
                                <div id="flush-collapseEleven" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 12){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM sextoa";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "sextoa"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "sextoa"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "sextoa"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                            <?php } if ($tipo_usuario == 13 || $tipo_usuario == 1) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwelve">
                                    <button class="accordion-button collapsed" id="sextob" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                        Ver calificación de 6° B
                                    </button>
                                </h2>
                                <div id="flush-collapseTwelve" class="table-responsive accordion-collapse collapse <?php if($tipo_usuario == 13){echo "show";}else{echo "collapse";} ?>" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM sextob";
                                            $resultado = mysqli_query($conn, $sql);
                                            ?>
                                            <h4 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                                                Tercer año - grupo B
                                            </h4>
                                            <table class="col-md-12 table table-bordered table-sm table-success table-striped">
                                                <thead>
                                                <thead>
                                                    <th>N° de lista</th>
                                                    <th>Nombre completo</th>
                                                    <th>1er Parcial</th>
                                                    <th>2do Parcial</th>
                                                    <th>3er Parcial</th>
                                                    <th>Promedio</th>
                                                    <th class="text-center" colspan="2">Opciones</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($registros = $resultado->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                        <td><?php echo $registros['nlista'];?></td>
                                                            <td><?php echo $registros['nombre']; echo " ". $registros['paterno']; echo " ". $registros['materno'];?></td>
                                                            <td><?php if($registros['primerP'] == 0){echo "Pendiente";}else{echo $registros['primerP'];}?></td>
                                                            <td><?php if($registros['segundoP'] == 0){echo "Pendiente";}else{echo $registros['segundoP'];}?></td>
                                                            <td><?php if($registros['tercerP'] == 0){echo "Pendiente";}else{echo $registros['tercerP'];}?></td>
                                                            <td><?php if($registros['promedio'] == 0){echo "Pendiente";}else{echo $registros['promedio'];}?></td>
                                                            <td><a class="btn btn-success" href="update.php?table=<?php echo "sextob"; ?>&id=<?php echo $registros['id']; ?>">Editar</a></td>
                                                            <td><a class="btn btn-danger" href="delete.php?table=<?php echo "sextob"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <a href="ingresarCalificaciones.php?table=<?php echo "sextob"; ?>" class="btn btn-primary">Ingresar alumnos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <br>
                        <?php } if ($tipo_usuario == 1 || $tipo_usuario == 2 || $tipo_usuario == 3|| $tipo_usuario == 4|| $tipo_usuario == 5 || $tipo_usuario == 6 || $tipo_usuario == 7 || $tipo_usuario == 8 || $tipo_usuario == 9 || $tipo_usuario == 10 || $tipo_usuario == 11 || $tipo_usuario == 12 || $tipo_usuario == 13) { ?>
                    </div>
                </div>
                <!--Aquí comienza el aside-->
                <!--Aquí termina el aside-->
            </div>
        </main>
        <!--Aquí termina el main-->

        <!--Inicia el footer-->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-secondary border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Victor Manuel Urquidez León</span>
                </div>
                <div class="col-md-4"></div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt="">
                    </a></li>
                    <li class="ms-3"><a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt=""></a></li>
                    <li class="ms-3"><a class="text-muted" href="#">
                        <img src="img/gear-wide-connected.svg" alt="">
                    </a></li>
                </ul>
                <div class="border-secondary border-top"></div>
            </footer>
        </div>
        <!--Aquí termina el footer-->

        <!--Scripts de JavaScript-->
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootbox.js"></script>
    </body>

    </html>

<?php }
mysqli_close($conn);
?>