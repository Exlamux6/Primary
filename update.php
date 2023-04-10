<?php
require 'conexion.php';

// Obtener el ID del producto a actualizar

$table =$_GET['table'];
$id = $_GET['id'];

// Obtener los datos actuales del producto
$stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

// Verificar si se ha enviado el formulario de actualización
/*
if (isset($_POST['actualizar'])) {
    $tabla = $_POST['tabla'];
    $id = $_POST['id'];
    $nlista = $_POST['nlista'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $calificacion = $_POST['calificacion'];
        // Actualizar la fila correspondiente en la base de datos
        $stmt = $conn->prepare("UPDATE $tabla SET nlista = ?, nombre = ?, paterno = ?, materno = ?, calificacion = ? WHERE id = ?");
        $stmt->bind_param("isssdi",$nlista, $nombre, $paterno, $materno, $calificacion, $id);
        $stmt->execute();

        // Redirigir al usuario a la página de lista de productos
        header('Location: admin.php');
        exit();
    }*/

// Asignar los valores de los datos actuales a las propiedades de los elementos de entrada del formulario
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();


/*
$servername = "localhost";
$username = "root";
$password = "12345678";
$databases = "crud";
$conection = mysqli_connect($servername, $username, $password, $databases);

    $id=$_GET['id'];
    $sql = "SELECT * FROM registro  WHERE id='$id' ";
    $resultado = mysqli_query($conection, $sql);
    $row = mysqli_fetch_array($resultado)
*/
?>
<!DOCTYPE html>
<html lang="en">
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
            <div class="col-md-9"> <br>
                <h3 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                    Actualizar
                </h3>

                <form action="actualizar.php" method="post">
                    <div class="col-md-12">
                    <input type="hidden" class="form-control" name="tabla" value="<?php echo $table; ?>">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">
                        <label for="titulo">N° de lista</label>
                        <input type="number" class="form-control" id="nlista" name="nlista" value="<?php echo $row['nlista'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">Nombre</label>
                        <input type="text" class="form-control" required autocomplete="off" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">Apellido paterno</label>
                        <input type="text" class="form-control" required autocomplete="off" name="paterno" id="paterno" value="<?php echo $row['paterno'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">Apellido materno</label>
                        <input type="text" class="form-control" required autocomplete="off" name="materno" id="materno" value="<?php echo $row['materno'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">Calificacion</label>
                        <input type="text" class="form-control" required autocomplete="off" name="calificacion" id="calificacion" value="<?php echo $row['calificacion'] ?>">
                    </div> <br>

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