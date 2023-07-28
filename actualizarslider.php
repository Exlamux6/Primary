<?php
session_start();
include 'conexion.php';

$id = $_POST['id'];
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];

// Obtener los nombres de archivo de las imágenes actuales
$querySelect = "SELECT imagen FROM slider WHERE id = '$id'";
$resultadoSelect = mysqli_query($conn, $querySelect);
$rowSelect = mysqli_fetch_assoc($resultadoSelect);

$imagenActual = $rowSelect['imagen'];

// Verificar si se seleccionó una nueva imagen
if (!empty($_FILES['imagen']['name'])) {
    $imagenP = $_FILES['imagen']['tmp_name'];

    $tipoP = $_FILES['imagen']['type'];
    $tiposPermitidos = ['image/gif', 'image/jpeg', 'image/webp', 'image/jpg', 'image/png'];
    if (!in_array($tipoP, $tiposPermitidos)) {
        $_SESSION['mensaje'] = 'Solo se permite archivos jpg, jpeg, gif, webp, png';
        header('Location: updateslider.php?id=' . $id);
        exit;
    }

    $imagenSlider = uniqid() . '.' . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    $rutaArchivoH = 'imgSlider/' . $imagenSlider;

    move_uploaded_file($imagenP, $rutaArchivoH);

    // Eliminar las imágenes antiguas
    if (!empty($imagenActual)) {
        $rutaImagenActual = 'imgSlider/' . $imagenActual;
        unlink($rutaImagenActual);
    }

    // Actualizar el registro en la base de datos con la nueva imagen
    $query = "UPDATE slider SET texto1 = '$texto1', texto2 = '$texto2',imagen = '$imagenSlider' WHERE id = '$id'";
} else {
    // Actualizar el registro en la base de datos sin cambiar la imagen
    $query = "UPDATE slider SET texto1 = '$texto1', texto2 = '$texto2' WHERE id = '$id'";
}

$resultado = mysqli_query($conn, $query);
if ($resultado) {
    $_SESSION['mensaje'] = 'Se ha actualizado el registro correctamente.';
    header('Location: actualizar_slider.php');
    exit;
} else {
    $_SESSION['mensaje'] = 'Ocurrió un error al actualizar el registro.';
    header('Location: updateslider.php?id=' . $id);
    exit;
}
?>
