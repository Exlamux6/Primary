<?php
    require 'conexion.php';

session_start();

if ($_POST) {

    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = mysqli_real_escape_string($conn, $_POST['passwor']);

    $stmt = $conn->prepare("SELECT id, passwor, nombre, tipo_usuario FROM usuario WHERE nombre = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['passwor'];
        $pass_c = sha1($password);

        if ($password_bd == $pass_c) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
            header("Location: admin.php");

        } else{
            echo "La contraseña no coincide";
        }

    } else{
        echo "No existe el usuario";
    }

    $stmt->close();
}



/*
$servername = "localhost";
$username = "root";
$password = "asdfg12345";
$dbname = "contacto";

// Crea la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();
*/

//if ($_POST) {

    //$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    //$password = mysqli_real_escape_string($conn, $_POST['passwor']);
    /*
    $usuario = $_POST['usuario'];
    $password = $_POST['passwor'];
    */
/*
    $sql = "SELECT id, passwor, nombre, tipo_usuario FROM usuario WHERE nombre ='$usuario'";
    $resultado = $conn->query($sql);
    $num = $resultado->num_rows;
    if ($num>0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['passwor'];
        $pass_c = sha1($password);

        if ($password_bd == $pass_c) {

            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
            header("Location: admin.php");

        } else{
            echo "La contraseña no coincide";
        }

    } else{
        echo "No existe el usuario";
    }
} */
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
                <h1 class="h2 pb-2 mb-4 text-dark border-bottom border-dark">Inicio de sesión</h1>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="text" class="form-control" required name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="passwor" required class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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

<?php
    mysqli_close($conn);
?>