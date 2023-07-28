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
    <link rel="stylesheet" href="css/contacto.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <title>Esc. Prim. Fed. Lic. Benito Juarez</title>
</head>

<body style="background-color:rgb(224, 224, 212)">
    <!--Inicia el header-->
    <!--Aquí termina el header-->

    <!--Inicia el menú de navegación-->
    <!--Aquí termina el menú de navegación-->

    <!--Aquí comienza el main-->
    <main class="container" style="margin-top: 20px;">
        <div class="row g-4">
            <div class="col-md-12">
                <h1 class="h1  mb-3 text-white border-bottom border-white">Contacto</h1>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <h3 class="mb-3 text-center text-white"><br>
                        <div class="Datos shadow rounded" style="background-color: black;">
                            <div class="row">
                                <div class="col-md-7 pe-0">
                                    <div class="form-left h-100 py-5 px-5">
                                        <form action="contacto.php" method="post" class="row g-4 needs-validation" novalidate>
                                            <div class="col-6">
                                                <label for="nombre">Nombre<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><img src="img/person.svg" alt="Icono persona"></div>
                                                    <input type="text" autofocus autocomplete="off" required id="nombre" name="nombre" class="form-control" placeholder="Manuel">
                                                    <div class="invalid-feedback">
                                                        <p style="font-size: 15px;">Ingrese un nombre.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="apellidos">Apellidos<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><img src="img/person.svg" alt="Icono persona"></div>
                                                    <input type="text" autocomplete="off" id="apellidos" name="apellidos" class="form-control" placeholder="Urquidez León">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="correo">E-mail<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><img src="img/envelope-at.svg" alt="Icono correo"></div>
                                                    <input type="email" autocomplete="off" id="correo" name="correo" class="form-control" placeholder="jcv_primaria@gmail.com">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="asunto">Asunto<span class="text-danger">*</span></label>
                                                <select class="form-select" required id="asunto" name="asunto">
                                                    <option selected disabled value="">Elegir opción...</option>
                                                    <option value="Sugerencia">Sugerencia</option>
                                                    <option value="Aportación de información">Solicitud de información</option>
                                                    <option value="Queja">Queja</option>
                                                    <option value="Agradecimiento">Agradecimiento</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                <p style="font-size: 15px;">Elija una opción</p>
                                                    </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="comentario">Comentario<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-text"><img src="img/card-text.svg" alt="Icono comentario"></div>
                                                    <textarea class="form-control" required id="comentario" name="comentario" rows="3" placeholder="Ingresa un comentario"></textarea>
                                                    <div class="invalid-feedback">
                                                    <p style="font-size: 15px;">Ingrese un comentario.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="enviar" id="enviar" value="enviar" class="btn btn-primary px-4 float-start mt-4">
                                                    Enviar
                                                </button>
                                                <a href="index.php" class="btn btn-warning px-4 float-end mt-4">
                                                    Regresar
                                                </a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="col-md-5 ps-1 d-none d-md-block">
                                    <div class=" container h-100 salario text-white text-center"> <br> <br>
                                        <i><img src="img/libro.png" width="45px" alt="" srcset=""></i>
                                        <hr>
                                        <h2 class="fs-1">Esc. Prim. Fed.</h2>
                                        <div class="form-right container text-white text-center pt-3">
                                            <h2 class="fs-1">Lic. Benito Juarez</h2>
                                            <hr>
                                            <h4 class="py-2 fecha">Fecha:
                                                <script>
                                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                                    var f = new Date();
                                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                                </script>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-end text-secondary mt-3" style="font-size: 14px;">Todos los derechos derechos reservados. &copy; Exlamux6.</p>
                </div>
            </div>
            <?php
            if (isset($_POST['enviar'])) {
                $nombre = $_POST['nombre'];
                $apellidos = $_POST['apellidos'];
                $correo = $_POST['correo'];
                $asunto = $_POST['asunto'];
                $comentario = $_POST['comentario'];

                // Preparar la consulta SQL
                $stmt = $conn->prepare("INSERT INTO datospersonales (nombre, apellidos, correo, asunto, comentario) VALUES (?, ?, ?, ?, ?)");

                // Asignar los valores a los parámetros de la consulta
                $stmt->bind_param("sssss", $nombre, $apellidos, $correo, $asunto, $comentario);

                // Ejecutar la consulta
                if ($stmt->execute()) {
                    echo '<script> setTimeout(function() { bootbox.alert({message:"Registro completado", centerVertical: true, size: "small"}); }, 1000);</script>';
                } else {
                    echo "Error al insertar los datos";
                }

                // Cerrar la conexión
                $stmt->close();
                $conn->close();
            }
            ?>
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
    <script src="js/bootbox.js"></script>
    <script src="js/contacto.js"></script>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>