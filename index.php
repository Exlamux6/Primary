<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/letras.css">
    <title>Esc. Prim. Fed. Lic. Benito Juarez</title>
</head>

<body class="services" style="background-color:rgb(224, 224, 212)">
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
                    <a href="index.php">
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
                                <a class="nav-link" style="color: white;" id="navegacion" href="acercade.html" onclick="acercade.js">Acerca
                                    de</a>
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
    <style>
        #my-image {
            filter: brightness(0.2);
            /* Ajusta el valor de opacidad según tus necesidades */
        }
    </style>
    <?php
    include 'conexion.php';

    $sql = "SELECT * FROM slider ORDER BY id DESC LIMIT 3";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
    ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $active = "active";
                for ($i = 0; $i < mysqli_num_rows($resultado); $i++) {
                ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>" aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
                <?php
                    $active = "";
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                $active = "active";
                while ($registros = $resultado->fetch_assoc()) {
                ?>
                    <div class="carousel-item <?php echo $active; ?>" data-bs-interval="3000">
                        <img id="my-image" src="imgSlider/<?php echo $registros['imagen'] ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $registros['texto1'] ?></h5>
                            <p><?php echo $registros['texto2'] ?></p>
                        </div>
                    </div>
                <?php
                    $active = "";
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <?php
    }

    mysqli_close($conn);
    ?>

    <!--Aquí termina el menú de navegación-->

    <!--Aquí comienza el main-->
    <main class="container" style="margin-top: 20px;">
        <div class="row g-4">
            <div class="col-md-8">
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Noticias</h1>
                <div class="row mb-2 service hidden">
                    <div class="col-md-12">
                        <?php
                        include 'conexion.php';

                        $sql = "SELECT * FROM noticias ORDER BY id DESC LIMIT 3";
                        $resultado = mysqli_query($conn, $sql);

                        while ($registros = $resultado->fetch_assoc()) {
                        ?>
                            <div id="FondoArticle" class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-md-3">
                                    <img class="img-fluid rounded-start w-100 h-100" src="imagenes/<?php echo $registros['imagen_portada'] ?>" alt="...">
                                </div>
                                <div class="col-md-9 p-4 d-flex flex-column position-static">
                                    <strong class="d-inline-block mb-2 text-primary"><?php echo $registros['titulo']; ?></strong>
                                    <h3 class="mb-0"><?php echo $registros['nombre_noticia']; ?></h3>
                                    <div class="mb-1 text-muted"><?php echo $registros['fecha']; ?></div>
                                    <p class="card-text mb-auto"><?php echo $registros['nota_corta']; ?></p>
                                    <div class="mb-1 text-muted">Autor: <?php echo $registros['autor']; ?></div>
                                    <form action="noticias.php" method="post">
                                        <input type="hidden" name="table" value="<?php echo "noticias"; ?>">
                                        <input type="hidden" name="id" value="<?php echo $registros['id']; ?>">
                                        <button type="submit" name="noticias" class="btn btn-primary">Continuar leyendo...</button>
                                    </form>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-12 my-3 py-4 service hidden">
                    <h2 class=" pb-2 mb-4 text-dark border-bottom border-dark">Número de Almunos</h2>
                    <div>
                        <p>Nuevo Guerrero, Gro, municipio de Tlapehuala. 40609.</p>
                        <table class="table table-striped  table-bordered table-success table-hover">
                            <thead>
                                <th>Grado</th>
                                <th>Grupo</th>
                                <th>Total de alumnos</th>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <th scope="row">1°</th>
                                    <td>A</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <th scope="row">1°</th>
                                    <td>B</td>
                                    <td>18</td>
                                </tr>
                                <tr>
                                    <th scope="row">2°</th>
                                    <td>A</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">2°</th>
                                    <td>B</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">3°</th>
                                    <td>A</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">3°</th>
                                    <td>B</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">4°</th>
                                    <td>A</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">4°</th>
                                    <td>B</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">5°</th>
                                    <td>A</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">5°</th>
                                    <td>B</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">6°</th>
                                    <td>A</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <th scope="row">6°</th>
                                    <td>B</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="col-md-12 my-3 py-4">
                    <h2 class=" pb-2 mb-4 text-dark border-bottom border-dark">Ubicación</h2>
                    <div>
                        <p>Nuevo Guerrero, Gro, municipio de Tlapehuala. 40609.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1894.8127459334598!2d-100.52726312686003!3d18.22712595641305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ccc9544debe73b%3A0x4315a35b5f08d353!2sEscuela%20Primaria%20Lic.%20Benito%20Juarez!5e0!3m2!1ses-419!2smx!4v1678729071845!5m2!1ses-419!2smx" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-secondary border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">&copy; 2023 Victor Manuel Urquidez León</span>
            </div>
            <div class="col-md-4"></div>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="acercade.html">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.html">Oferta educativa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html">Contacto</a>
                </li>
            </ul>
        </footer>
    </div>
    <!--Aquí termina el footer-->

    <!--Scripts de JavaScript-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scroll.js"></script>
</body>
<?
mysqli_close($conn);
?>

</html>