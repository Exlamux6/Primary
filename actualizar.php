<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
    $tabla = $_POST['tabla'];

    if($tabla == "usuario"){
        $id = $_POST['id'];
        $usuario = $_POST['nombre'];
        $pass = $_POST['password'];
        $grupo = $_POST['grupo'];
        $pass_c = sha1($pass);

    $stmt = $conn->prepare("UPDATE $tabla SET nombre = ?, passwor = ?, tipo_usuario = ? WHERE id = ?");
    $stmt->bind_param("ssii",$usuario, $pass_c, $grupo, $id);
    $stmt->execute();
    // Redirigir al usuario a la página de lista de productos
    mysqli_close($conn);
    header('Location: crearUsuarios.php');
    exit();
    } else{
    $id = $_POST['id'];
    $nlista = $_POST['nlista'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $primerP = $_POST['primerP'];
    $segundoP = $_POST['segundoP'];
    $tercerP = $_POST['tercerP'];
    $promedio = $_POST['promedio'];

    // Actualizar la fila correspondiente en la base de datos
    $stmt = $conn->prepare("UPDATE $tabla SET nlista = ?, nombre = ?, paterno = ?, materno = ?,primerP = ?, segundoP = ?, tercerP = ?, promedio = ? WHERE id = ?");
    $stmt->bind_param("isssddddi",$nlista, $nombre, $paterno, $materno, $primerP, $segundoP, $tercerP, $promedio, $id);
    $stmt->execute();

    // Redirigir al usuario a la página de lista de productos
    mysqli_close($conn);
    header('Location: admin.php');
    exit();
    }
?>