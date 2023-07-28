<?php
require 'conexion.php';
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
require 'conexion.php';

// Obtener el ID del producto a actualizar

$table =$_GET['table'];
$id = $_GET['id'];

// Obtener los datos actuales del producto
$stmt = $conn->prepare("SELECT * FROM slider WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

// Asignar los valores de los datos actuales a las propiedades de los elementos de entrada del formulario
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row g-4">
            <div class="col-md-12"> <br>
                <h3 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                    Actualizar sección de imágenes
                </h3>
                <form action="actualizarslider.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="titulo">Texto 1:</label>
                                <input type="text" class="form-control" id="texto1" name="texto1" value="<?php echo $row['texto1'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="titulo">Texto 2:</label>
                                <input type="text" class="form-control" id="texto2" name="texto2" value="<?php echo $row['texto2'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="Imagen">Imagen de portada</label>
                                <img class="form-control" style="height: 200px; width:50%" src="imgSlider/<?php echo $row['imagen']?>" class="card-img-top" alt="...">
                                <input type="file" class="form-control" name="imagen" id="imagen" >
                                <?php if (!empty($row['imagen'])): ?>
                                    <input type="text" class="form-control" disabled value="<?php echo $row['imagen']; ?>">
                                <?php endif; ?>
                            </div> <br>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">

                    <button type="submit" class="btn btn-primary" id="actualizar" name="actualizar" value="actualizar">Actualizar</button>
                </form>

            </div>
        </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
}

// Cerrar la conexión
mysqli_close($conn);
?>