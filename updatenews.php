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
$stmt = $conn->prepare("SELECT * FROM noticias WHERE id = ?");
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
                    Actualizar
                </h3>
                <form action="actualizarnoticias.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $row['titulo'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="Nota">Nota Corta</label>
                                <textarea name="nota_corta" id="nota_corta" class="form-control" required><?php echo $row['nota_corta'] ?></textarea>
                            </div> <br>
                            <div class="form-group">
                                <label for="Autor">Autor</label>
                                <input type="text" class="form-control" required autocomplete="off" name="autor" id="autor" value="<?php echo $row['autor'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="Imagen">Imagen de portada</label>
                                <img class="form-control" style="height: 200px; width:50%" src="imagenes/<?php echo $row['imagen_portada']?>" class="card-img-top" alt="...">
                                <input type="file" class="form-control" name="imagen_P" id="imagen_P" >
                                <?php if (!empty($row['imagen_portada'])): ?>
                                    <input type="text" class="form-control" disabled value="<?php echo $row['imagen_portada']; ?>">
                                <?php endif; ?>
                            </div> <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Noticia">Nombre de la noticia</label>
                                <input type="text" class="form-control" required autocomplete="off" name="nombre" id="nombre" value="<?php echo $row['nombre_noticia'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="correo">Nota completa</label>
                                <textarea name="nota_completa" id="nota_completa" class="form-control" required><?php echo $row['nota_completa'] ?></textarea>
                            </div> <br>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date"  class="form-control" required autocomplete="off" name="fecha" id="fecha" value="<?php echo $row['fecha'] ?>">
                            </div> <br>
                            <div class="form-group">
                                <label for="ImagenH">Imagen de horizontal de la noticia</label>
                                <img class="form-control" style="height: 200px; width:50%" src="imagenes/<?php echo $row['imagen_horizontal']?>" class="card-img-top" alt="...">
                                <input type="file" class="form-control" name="imagen_H" id="imagen_H">
                                <?php if (!empty($row['imagen_horizontal'])): ?>
                                    <input type="text" class="form-control" disabled value="<?php echo $row['imagen_horizontal']; ?>">
                                <?php endif; ?>
                            </div>
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