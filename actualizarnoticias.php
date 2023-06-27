<?php
session_start();
include 'conexion.php';

$titulo = $_POST['titulo'];
$nombreN = $_POST['nombre'];
$notaCorta = $_POST['nota_corta'];
$notaCompleta = $_POST['nota_completa'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$id = $_POST['id'];

// Obtener los nombres de archivo de las imágenes actuales
$querySelect = "SELECT imagen_portada, imagen_horizontal FROM noticias WHERE id = '$id'";
$resultadoSelect = mysqli_query($conn, $querySelect);
$rowSelect = mysqli_fetch_assoc($resultadoSelect);

$imagenPortadaActual = $rowSelect['imagen_portada'];
$imagenHorizontalActual = $rowSelect['imagen_horizontal'];

// Verificar si se seleccionó una nueva imagen
if (!empty($_FILES['imagen_P']['name']) && !empty($_FILES['imagen_H']['name'])) {
    $imagenP = $_FILES['imagen_P']['tmp_name'];
    $imagenH = $_FILES['imagen_H']['tmp_name'];

    $tipoP = $_FILES['imagen_P']['type'];
    $tipoH = $_FILES['imagen_H']['type'];
    $tiposPermitidos = ['image/gif', 'image/jpeg', 'image/webp', 'image/jpg'];
    if (!in_array($tipoP, $tiposPermitidos) || !in_array($tipoH, $tiposPermitidos)) {
        $_SESSION['mensaje'] = 'Solo se permite archivos jpg, jpeg, gif, webp';
        header('Location: updatenews.php?id=' . $id);
        exit;
    }

    $imagenHorizontal = uniqid() . '.' . pathinfo($_FILES['imagen_H']['name'], PATHINFO_EXTENSION);
    $rutaArchivoH = 'imagenes/' . $imagenHorizontal;
    $imagen_Portada = uniqid() . '.' . pathinfo($_FILES['imagen_P']['name'], PATHINFO_EXTENSION);
    $rutaArchivoP = 'imagenes/' . $imagen_Portada;

    move_uploaded_file($imagenP, $rutaArchivoP);
    move_uploaded_file($imagenH, $rutaArchivoH);

    // Eliminar las imágenes antiguas
    if (!empty($imagenPortadaActual)) {
        $rutaImagenPortadaActual = 'imagenes/' . $imagenPortadaActual;
        unlink($rutaImagenPortadaActual);
    }

    if (!empty($imagenHorizontalActual)) {
        $rutaImagenHorizontalActual = 'imagenes/' . $imagenHorizontalActual;
        unlink($rutaImagenHorizontalActual);
    }

    // Actualizar el registro en la base de datos con la nueva imagen
    $query = "UPDATE noticias SET titulo = '$titulo', nombre_noticia = '$nombreN', nota_corta = '$notaCorta', nota_completa = '$notaCompleta', autor = '$autor', fecha = '$fecha', imagen_portada = '$imagen_Portada', imagen_horizontal = '$imagenHorizontal' WHERE id = '$id'";
} else {
    // Actualizar el registro en la base de datos sin cambiar la imagen
    $query = "UPDATE noticias SET titulo = '$titulo', nombre_noticia = '$nombreN', nota_corta = '$notaCorta', nota_completa = '$notaCompleta', autor = '$autor', fecha = '$fecha' WHERE id = '$id'";
}

$resultado = mysqli_query($conn, $query);
if ($resultado) {
    $_SESSION['mensaje'] = 'Se ha actualizado el registro correctamente.';
    header('Location: editarnoticias.php');
    exit;
} else {
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el registro.';
    header('Location: updatenews.php?id=' . $id);
    exit;
}
?>
