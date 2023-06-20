<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
if (isset($_POST['borrar'])) {
    $id = $_POST['id'];

    // Obtener el nombre de la imagen a borrar
    $query = "SELECT imagen FROM img WHERE id = '$id'";
    $resultado = mysqli_query($conn, $query);
    $registro = mysqli_fetch_assoc($resultado);
    $imagen = $registro['imagen'];

    // Borrar el registro de la base de datos
    $query = "DELETE FROM img WHERE id = '$id'";
    $resultado = mysqli_query($conn, $query);
    if ($resultado) {
        // Borrar la imagen de la carpeta
        $rutaImagen = 'imagenes/' . $imagen;
        if (file_exists($rutaImagen)) {
            unlink($rutaImagen);
        }

        $_SESSION['mensaje'] = 'Se ha borrado el registro correctamente.';
    } else {
        $_SESSION['mensaje'] = 'Ocurrió un error al borrar el registro.';
    }

    header('Location: index.php');
    exit;
}
?>