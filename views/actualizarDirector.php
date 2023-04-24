<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar director</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
    <h2 class="text-center">Director</h2>
        <form action="../crud/actualizarDirector.php" method="post">
            <?php
            include_once("../config/conexion.php");
            $sql = "SELECT * FROM director WHERE id_dire =" . $_REQUEST['Id'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
            ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="<?php echo $row['id_dire']; ?>">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del director" name="txtNombreD" value="<?php echo $row['nombres']; ?>">
                <div class="mb-3">
                    <label class="form-label">Apellido Paterno:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el apellido paterno" name="txtaPD" value="<?php echo $row['ap_pat']; ?>">
                    <label class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el apellido Materno" name="txtaMD" value="<?php echo $row['ap_mat']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>



</body>

</html>