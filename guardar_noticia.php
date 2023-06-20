<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$titulo = $_POST['titulo'];
$nombreN = $_POST['nombre'];
$notaCorta = $_POST['nota_corta'];
$notaCompleta = $_POST['nota_completa'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$imagen_Portada = $_FILES['imagenP']['tmp_name'];
$imagenHorizontal = $_FILES['imagenH']['tmp_name'];

if (isset($imagen_Portada) && is_uploaded_file($imagen_Portada) && isset($imagenHorizontal) && is_uploaded_file($imagenHorizontal)) {
    $tipoPortada = $_FILES['imagenP']['type'];
    $tipoHorizontal = $_FILES['imagenH']['type'];

    $tiposPermitidos = ['image/gif', 'image/jpeg', 'image/webp', 'image/jpg'];
    if (!in_array($tipoPortada, $tiposPermitidos) || !in_array($tipoHorizontal, $tiposPermitidos)) {
        $_SESSION['mensaje'] = 'Solo se permiten archivos jpg, jpeg, gif, webp';
        header('Location: publicarnoticias.php');
        exit;
    }

    // Ajustar límites de tamaño de archivo
    ini_set('upload_max_filesize', '10M'); // Tamaño máximo permitido: 10 MB
    ini_set('post_max_size', '10M');

    $tamanoMaximo = 3 * 1024 * 1024; // 2 MB en bytes

    if ($_FILES['imagenP']['size'] > $tamanoMaximo || $_FILES['imagenH']['size'] > $tamanoMaximo) {
        $_SESSION['mensaje'] = 'El tamaño de la foto excede el límite permitido de 2 MB';
        header('Location: publicarnoticias.php');
        exit;
    }

    $nombreArchivoPortada = uniqid() . '.' . pathinfo($_FILES['imagenP']['name'], PATHINFO_EXTENSION);
    $nombreArchivoHorizontal = uniqid() . '.' . pathinfo($_FILES['imagenH']['name'], PATHINFO_EXTENSION);
    $rutaArchivoPortada = 'imagenes/' . $nombreArchivoPortada;
    $rutaArchivoHorizontal = 'imagenes/' . $nombreArchivoHorizontal;

    $query = "INSERT INTO noticias (titulo, nombre_noticia, nota_corta, nota_completa, autor, fecha, imagen_portada, imagen_horizontal) VALUES ('$titulo', '$nombreN', '$notaCorta', '$notaCompleta', '$autor', '$fecha', '$nombreArchivoPortada', '$nombreArchivoHorizontal')";
    $resultado = mysqli_query($conn, $query);
    if ($resultado) {
        // Mover archivos
        move_uploaded_file($imagen_Portada, $rutaArchivoPortada);
        move_uploaded_file($imagenHorizontal, $rutaArchivoHorizontal);
        $_SESSION['mensaje'] = 'Se ha subido correctamente.';
        header('Location: publicarnoticias.php');
        exit;
    } else {
        $_SESSION['mensaje'] = 'Ocurrió un error en el servidor';
        header('Location: admin.php');
        exit;
    }
}
?>

