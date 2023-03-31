<?php
require 'conexion.php';
    $id = $_POST['id'];
    $nlista = $_POST['nlista'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $calificacion = $_POST['calificacion'];

    // Actualizar la fila correspondiente en la base de datos
    $stmt = $conn->prepare("UPDATE primeroa SET nlista = ?, nombre = ?, paterno = ?, materno = ?, calificacion = ? WHERE id = ?");
    $stmt->bind_param($nlista, $nombre, $paterno, $materno, $calificacion, $id);
    $stmt->execute();

    // Redirigir al usuario a la página de lista de productos
    header('Location: admin.php');
    exit();
?>