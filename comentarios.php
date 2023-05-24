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
    <script src="js/jquery-3.5.1.min.js"></script>
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
                                <li class="nav-item" id="botonNav">
                                    <a class="nav-link" style="color: white;" id="navegacion" href="crearUsuarios.php">
                                        Crear usuarios
                                    </a>
                                </li>
                                <li class="nav-item" id="botonNav">
                                    <a class="nav-link" style="color: white;" id="navegacion" href="verUsuarios.php">
                                        Ver usuarios
                                    </a>
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
        <div class="col-md-12">
            <h1 class="display-5 text-center text-dark mb-5 pb-2 border-bottom border-3 border-dark">Panel de Administración</h1>
        </div>
        <main class="container" style="margin-top: 20px;">
            <div class="row g-4">
                <div class="col-md-12">
                    <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Comentarios</h1>
                        <div class="col-md-12 table-responsive">
                            <?php
                            $sql = "SELECT * FROM datospersonales";
                            $resultado = mysqli_query($conn, $sql);
                            ?>
                            <table class="col-md-12 table table-bordered table-success table-striped">
                                <thead>
                                    <th>Nombre</th>
                                    <th>E-mail</th>
                                    <th>Asunto</th>
                                    <th colspan="3">Comentarios</th>
                                    <th>Opción</th>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($registros = $resultado ->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?php echo $registros['nombre'];?></td>
                                        <td><?php echo $registros['correo']; ?></td>
                                        <td><?php echo $registros['asunto'];?></td>
                                        <td colspan="3"><?php echo $registros['comentario'];?></td>
                                        <td><a class="btn btn-danger" href="delete.php?table=<?php echo "datospersonales"; ?>&id=<?php echo $registros['id']; ?>">Borrar</a></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
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

<?php } else{
    header("Location: admin.php");
}
mysqli_close($conn);
?>