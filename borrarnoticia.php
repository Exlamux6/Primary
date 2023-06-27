<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
if (isset($_POST['borrar'])) {
    $id = $_POST['id'];

    // Obtener el nombre de la imagen a borrar
    $query = "SELECT imagen_portada, imagen_horizontal FROM noticias WHERE id = '$id'";
    $resultado = mysqli_query($conn, $query);
    $registro = mysqli_fetch_assoc($resultado);
    $imagenP = $registro['imagen_portada'];
    $imagenH = $registro['imagen_horizontal'];

    // Borrar el registro de la base de datos
    $query = "DELETE FROM noticias WHERE id = '$id'";
    $resultado = mysqli_query($conn, $query);
    if ($resultado) {
        // Borrar la imagen de la carpeta
        $rutaImagenP = 'imagenes/' . $imagenP;
        $rutaImagenH = 'imagenes/' . $imagenH;
        if (file_exists($rutaImagenP) && file_exists($rutaImagenH)) {
            unlink($rutaImagenP);
            unlink($rutaImagenH);
        }

        $_SESSION['mensaje'] = 'Se ha borrado el registro correctamente.';
    } else {
        $_SESSION['mensaje'] = 'Ocurrió un error al borrar el registro.';
    }

    header('Location: editarnoticias.php');
    exit;
}
?>