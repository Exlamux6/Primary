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
    <main class="container" style="margin-top: 20px;">
        <div class="row g-4">
            <div class="col-md-12">
                <h1 class="h2 pb-2 mb-4 text-center text-dark border-bottom border-dark">Publicar noticias</h1>
                <div class="col-md-12 d-flex justify-content-center bg-secondary py-4 rounded">
                <form action="guardar_noticia.php" method="post" enctype="multipart/form-data">
                    <h1>Formulario de Noticias</h1>
                    <fieldset>
                        <legend>Información de la Noticia</legend>
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Noticias deportivas/académicas/sociales" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre de la Noticia:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Solo 6 palabras por máximo" required>
                        </div>
                        <div class="mb-3">
                            <label for="nota_corta" class="form-label">Nota Corta:</label>
                            <textarea class="form-control" id="nota_corta" name="nota_corta" placeholder="Solo 13 palabras" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="nota_completa" class="form-label">Nota Completa:</label>
                            <textarea class="form-control" id="nota_completa" name="nota_completa" rows="5" required></textarea>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Información Adicional</legend>
                        <div class="mb-3">
                            <label for="autor" class="form-label">Nombre del autor:</label>
                            <input type="text" class="form-control" id="autor" name="autor" placeholder="Jorge Cadena" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha de publicación:</label>
                            <input type="date" class="form-control" id="fecha" name="fecha" required>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Imágenes</legend>
                        <div class="mb-3">
                            <label for="imagenP" class="form-label">Imagen de portada (vertical):</label>
                            <input type="file" class="form-control" id="imagenP" name="imagenP" required>
                        </div>
                        <div class="mb-3">
                            <label for="imagenH" class="form-label">Imagen horizontal:</label>
                            <input type="file" class="form-control" id="imagenH" name="imagenH" required>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Publicar noticia</button>
                </form> <br>
                </div> <br><br>
            </div>

            <!--Aquí comienza el aside-->
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
<?php
} else{
    header("Location: admin.php");
}
mysqli_close($conn)
?>