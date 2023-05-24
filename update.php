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
$stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
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
            <div class="col-md-9"> <br>
                <h3 class="pb-4 mb-4 fst-italic border-bottom border-primary">
                    Actualizar
                </h3>
                <?php if($table=="usuario"){ ?>
                    <form action="actualizar.php" method="post">
                        <div class="form-group col-md-12">
                        <input type="hidden" class="form-control" name="tabla" value="<?php echo $table = "usuario"; ?>">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" required autocomplete="off" value="<?php echo $row['nombre'] ?>" name="nombre" id="nombre">
                        </div> <br>
                        <div class="form-group col-md-12">
                            <label for="password">Contraseña</label>
                            <input type="text" class="form-control" required autocomplete="off" placeholder="ingrese contraseña nueva" name="password" id="password">
                        </div> <br>
                        <div class="form-group col-md-12">
                            <label for="tipodeUsuario">Tipo de usuario</label>
                            <select class="input-group-text col-10 form-select" name="grupo" id="grupo" required>
                                <option selected disabled value="">Elegir opción...</option>
                                <option value="1" id="admin" class="text-start">Administrador</option>
                                <option value="2" id="primeroa" class="text-start">1er Grado - Grupo A</option>
                                <option value="3" class="text-start">1er Grado - Grupo B</option>
                                <option value="4" id="segundoa" class="text-start">2do Grado - Grupo A</option>
                                <option value="5" class="text-start">2do Grado - Grupo B</option>
                                <option value="6" id="terceroa" class="text-start">3er Grado - Grupo A</option>
                                <option value="7" class="text-start">3er Grado - Grupo B</option>
                                <option value="8" id="cuartoa" class="text-start">4to Grado - Grupo A</option>
                                <option value="9" class="text-start">4to Grado - Grupo B</option>
                                <option value="10" id="quintoa" class="text-start">5to Grado - Grupo A</option>
                                <option value="11" class="text-start">5to Grado - Grupo B</option>
                                <option value="12" id="sextoa" class="text-start">6to Grado - Grupo A</option>
                                <option value="13" class="text-start">6to Grado - Grupo B</option>
                            </select>
                        </div> <br>
                        <button type="submit" class="btn btn-primary" name="actualizar" value="actualizar">Actualizar usuario</button>
                    </form> <br>
                <?php } else { ?>
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
                        <label for="correo">1er Parcial</label>
                        <input type="number" step="any" min="0" max="10" class="form-control" required autocomplete="off" name="primerP" id="primerP" value="<?php echo $row['primerP'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">2do Parcial</label>
                        <input type="number" step="any" min="0" max="10" class="form-control" required autocomplete="off" name="segundoP" id="segundoP" value="<?php echo $row['segundoP'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">3do Parcial</label>
                        <input type="number" step="any" min="0" max="10" class="form-control" required autocomplete="off" name="tercerP" id="tercerP" value="<?php echo $row['tercerP'] ?>">
                    </div> <br>
                    <div class="form-group col-md-12">
                        <label for="correo">Pomedio</label>
                        <input type="number" step="any" min="0" max="10" class="form-control" required autocomplete="off" name="promedio" id="promedio" value="<?php echo $row['promedio'] ?>">
                    </div> <br>

                    <button type="submit" class="btn btn-primary" id="actualizar" name="actualizar" value="actualizar">Actualizar</button>
                </form>
                <?php } ?>
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