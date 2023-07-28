<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$imagen = $_FILES['imagen']['tmp_name'];

if (isset($imagen) && is_uploaded_file($imagen)) {
    $tipoSlider = $_FILES['imagen']['type'];

    $tiposPermitidos = ['image/gif', 'image/jpeg', 'image/webp', 'image/jpg'];
    if (!in_array($tipoSlider, $tiposPermitidos)) {
        $_SESSION['mensaje'] = 'Solo se permiten archivos jpg, jpeg, gif, webp';
        header('Location: imageneslider.php');
        exit;
    }

    // Ajustar límites de tamaño de archivo
    ini_set('upload_max_filesize', '10M'); // Tamaño máximo permitido: 10 MB
    ini_set('post_max_size', '10M');

    $tamanoMaximo = 10 * 1024 * 1024; // 2 MB en bytes

    if ($_FILES['imagen']['size'] > $tamanoMaximo) {
        $_SESSION['mensaje'] = 'El tamaño de la foto excede el límite permitido de 10 MB';
        header('Location: publicarnoticias.php');
        exit;
    }

    $nombreArchivoPortada = uniqid() . '.' . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    $rutaArchivoPortada = 'imgSlider/' . $nombreArchivoPortada;

    $query = "INSERT INTO slider (texto1, texto2, imagen) VALUES ('$texto1', '$texto2','$nombreArchivoPortada')";
    $resultado = mysqli_query($conn, $query);
    if ($resultado) {
        // Mover archivos
        move_uploaded_file($imagen, $rutaArchivoPortada);
        $_SESSION['mensaje'] = 'Se ha subido correctamente.';
        header('Location: actualizar_slider.php');
        exit;
    } else {
        $_SESSION['mensaje'] = 'Ocurrió un error en el servidor';
        header('Location: admin.php');
        exit;
    }
}
?>

