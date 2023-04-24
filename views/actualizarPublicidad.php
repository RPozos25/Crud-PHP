<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar publicidad</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
    <h2 class="text-center">Publicidad</h2>

        <form action="../crud/actualizarPublicidad.php" method="post">
            <?php
                include_once("../config/conexion.php");
                $sql = "SELECT * FROM publicidad WHERE id_publicidad =" . $_REQUEST['Id'];
                $resultado = $conexion->query($sql);
                $row = $resultado->fetch_assoc();
            ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control" name="id" value="<?php echo $row['id_publicidad']; ?>">
                <label class="form-label">Duración:</label>
                <input type="text" class="form-control" placeholder="Ingresa la duracion de la prublicidad" name="txtDuracion" value="<?php echo $row['duracion']; ?>">
                <div class="mb-3">
                    <label class="form-label">Coste:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el coste de la publicidad" name="txtCoste" value="<?php echo $row['coste']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>