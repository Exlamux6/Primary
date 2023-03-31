<?php
    require 'conexion.php';

    $id = $_GET['id'];
        // Actualizar la fila correspondiente en la base de datos
        $stmt = $conn->prepare("DELETE FROM primeroa WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();

        // Redirigir al usuario a la página de lista de productos
        header('Location: admin.php');
        exit();

        mysqli_close($conn);
?>