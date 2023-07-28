<?php
require 'conexion.php';
$tabla = $_POST['table'];
$id = $_POST['id'];

if ( $tabla == "" || $id == ""){
    header("Location: index.php");
} else{
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
    <link rel="stylesheet" href="css/letras.css">
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
                    <a class="navbar-brand hover-button" id="nombrePrimaria" style="color: white;" href="#"> Esc. Prim. Fed. Benito Juarez</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link active" id="navegacion" style="color: white;" aria-current="page" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link" style="color: white;" id="navegacion" href="acercade.html">Acerca de</a>
                            </li>
                            <li class="nav-item" id="botonNav">
                                <a class="nav-link" style="color: white;" id="navegacion" href="ofertaeducativa.html">Oferta educativa</a>
                            </li>
                            <li class="nav-item dropdown" id="botonNav">
                                <a class="nav-link dropdown-toggle show.bs.dropdown" id="navegacion" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" style="color: white;" aria-expanded="false">
                                    Grupos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-image:  linear-gradient(80deg,#5f8788,#4b507c);">
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
            <h1 class="h2 pb-2 mb-4 text-center text-dark border-bottom border-dark">
                Noticias
            </h1>
            <div class="col-md-12">
                <?php
                $sql = "SELECT * FROM $tabla WHERE id = '$id'";
                $resultado = mysqli_query($conn, $sql);
                while ($registros = $resultado->fetch_assoc()) {
                ?>
                    <div class="container">
                        <h2 class="display-5 link-body-emphasis mb-0"><?php echo $registros['nombre_noticia'] ?></h2>
                        <p class="blog-post-meta mb-4 text-muted"><?php echo $registros['fecha'] ?> por <?php echo $registros['autor'] ?></p>
                        <div class="row g-4">
                            <div class="col-md-3">
                                <img src="imagenes/<?php echo $registros['imagen_portada'] ?>" class="rounded img-fluid" alt="...">
                            </div>
                            <div class="col-md-9">
                                <article class="blog-post">
                                    <p class="lead text-justify mb-4" style="font-size: 18px; color: #333;"><?php echo $registros['nota_completa'] ?></p>
                                </article>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <!--Aquí comienza el aside-->
        <!--Aquí termina el aside-->
    </main> <br><br>
    <!--Aquí termina el main-->

    <!--Noticias-->
    <div class="container marketing">
    <h2 class="h2 mb-0">Más noticias para ver</h2>
    <hr>
        <div class="row justify-content-center">
            <?php
            $sql = "SELECT * FROM $tabla WHERE id != '$id' ORDER BY id DESC LIMIT 3";
            $resultado = mysqli_query($conn, $sql);
            while ($filas = $resultado->fetch_assoc()) {
            ?>
                <div class="col-lg-4 p-3 card  rounded-5 border-secondary " style="background-color:rgb(200, 204, 150)">
                <center>
                    <img src="imagenes/<?php echo $filas['imagen_portada'] ?>" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </img>
                    <h3 class="fw-normal"><?php echo $filas['nombre_noticia'] ?></h3>
                    <p><?php echo $filas['nota_corta'] ?></p>
                    <form action="noticias.php" method="post">
                        <input type="hidden" name="table" value="<?php echo "noticias"; ?>">
                        <input type="hidden" name="id" value="<?php echo $filas['id']; ?>">
                        <button type="submit" name="noticias" class="btn btn-primary">Ver noticia...</button>
                    </form>
                </div>
                </center>
            <?php } ?>
        </div>
    </div>
    <!--Fin de noticias-->
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
}
mysqli_close($conn);
?>

</html>