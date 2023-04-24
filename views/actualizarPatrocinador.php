<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar Patrocinador</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
    <h2 class="text-center">Patrocinador</h2>

        <form action="../crud/actualizarPatrocinador.php" method="post">
        <?php
            include_once("../config/conexion.php");
            $sql = "SELECT * FROM patrocinador WHERE id_patr =" . $_REQUEST['Id'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_patr']; ?>">
                <label class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" placeholder="Ingresa el apellido paterno" name="txta_pat" value="<?php echo $row['a_pat']; ?>">
                <div class="mb-3">
                    <label class="form-label">Apellido Materno:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el apellido materno" name="txta_mat" value="<?php echo $row['a_mat']; ?>">
                    <label class="form-label">Nombre del responsable:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre del responsable" name="txtNombres" value="<?php echo $row['nombresP']; ?>">
                    <label class="form-label">Contrato:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el No de contrato" name="txtContrato" value="<?php echo $row['No_contrato']; ?>">
                    <label class="form-label">Duracion:</label>
                    <input type="text" class="form-control" placeholder="Ingresa la duracion" name="txtDuracion" value="<?php echo $row['duracion']; ?>">
                    <label class="form-label">Importe_contrato:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el importe" name="txtImporte" value="<?php echo $row['importe_contrato']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>