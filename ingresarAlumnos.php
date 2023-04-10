<?php
    require 'conexion.php';
                    $table = $_POST['tabla'];
                    $nlista = $_POST['nlista'];
                    $nombre = $_POST['nombre'];
                    $paterno = $_POST['paterno'];
                    $materno = $_POST['materno'];
                    $calificacion = $_POST['calificacion'];

                    $insertarDatos = "INSERT INTO $table (nlista, nombre, paterno, materno, calificacion) VALUES ( '$nlista', '$nombre', '$paterno', '$materno', '$calificacion')";
                    $ejecutarInsertar = mysqli_query($conn, $insertarDatos);
                    header('location: admin.php');
                    // Actualizar la fila correspondiente en la base de datos
                    /*$stmt = $conn->prepare("INSERT INTO primeroa nlista, nombre, paterno, materno, calificacion VALUES '?', '?', '?', '?','?' ");
                    $stmt->bind_param($nlista, $nombre, $paterno, $materno, $calificacion);
                    $stmt->execute();

                    // Redirigir al usuario a la página de lista de productos
                    header('Location: admin.php');
                    exit();

                        // Cerrar la conexión
                        $stmt->close(); */


                    /*
                    if (isset($_POST['enviar'])) {
                        $nombre =$_POST['nombre'];
                        $apellidos = $_POST['apellidos'];
                        $correo = $_POST['correo'];
                        $asunto = $_POST['asunto'];
                        $comentario = $_POST['comentario'];
                        $insertarDatos = "INSERT INTO datospersonales(id, nombre, apellidos, correo, asunto, comentario) VALUES (NULL, '$nombre', '$apellidos', '$correo', '$asunto', '$comentario')";
                        $ejecutarInsertar = mysqli_query($conn,$insertarDatos);
                    }
                    */
