<?php
require 'conexion.php';
    $tabla = $_POST['tabla'];
    $id = $_POST['id'];
    $nlista = $_POST['nlista'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $calificacion = $_POST['calificacion'];

    // Actualizar la fila correspondiente en la base de datos
    $stmt = $conn->prepare("UPDATE $tabla SET nlista = ?, nombre = ?, paterno = ?, materno = ?, calificacion = ? WHERE id = ?");
    $stmt->bind_param("isssdi",$nlista, $nombre, $paterno, $materno, $calificacion, $id);
    $stmt->execute();

    // Redirigir al usuario a la página de lista de productos
    header('Location: admin.php');
    exit();
?>