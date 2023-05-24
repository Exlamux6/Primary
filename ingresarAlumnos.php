<?php
    require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
$tablaU = $_POST['tabla'];
if($tablaU == "usuario"){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $grado = $_POST['grupo'];
    $pass_c = sha1($password);
    $insertarDatos = "INSERT INTO $tablaU (id, nombre, passwor, tipo_usuario) VALUES ('NULL', '$nombre', '$pass_c', '$grado')";
    $ejecutarInsertar = mysqli_query($conn, $insertarDatos);
    mysqli_close($conn);
    header('location: crearUsuarios.php');
}else{
                    $table = $_POST['tabla'];
                    $nlista = $_POST['nlista'];
                    $nombre = $_POST['nombre'];
                    $paterno = $_POST['paterno'];
                    $materno = $_POST['materno'];
                    $primerP = $_POST['pparcial'];
                    $segundoP = $_POST['sparcial'];
                    $tercerP = $_POST['tparcial'];
                    $promedio = $_POST['promedio'];

                    $insertarDatos = "INSERT INTO $table (nlista, nombre, paterno, materno, primerP, segundoP, tercerP, promedio) VALUES ( '$nlista', '$nombre', '$paterno', '$materno', '$primerP', '$segundoP', '$tercerP', '$promedio')";
                    $ejecutarInsertar = mysqli_query($conn, $insertarDatos);
                    mysqli_close($conn);
                    header('location: admin.php');
}
