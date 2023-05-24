<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
    $tabla = $_GET['table'];
    $id = $_GET['id'];
        // Actualizar la fila correspondiente en la base de datos
        $stmt = $conn->prepare("DELETE FROM $tabla WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();

        // Redirigir al usuario a la página de lista de productos
        if($tabla == "datospersonales"){
            header('Location: comentarios.php');
            exit();
            mysqli_close($conn);
        } else if($tabla == "usuario"){
            header('Location: crearUsuarios.php');
            exit();
            mysqli_close($conn);
        } else{
            header('Location: admin.php');
            exit();
            mysqli_close($conn);
        }
?>