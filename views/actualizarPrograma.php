<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar programa</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
    <h2 class="text-center">Programa</h2>

        <form action="../crud/ActualizarPrograma.php" method="post">
        <?php
                include_once("../config/conexion.php");
                $sql = "SELECT * FROM programa WHERE id_progr =" . $_REQUEST['Id'];
                $resultado = $conexion->query($sql);
                $row = $resultado->fetch_assoc();
            ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_progr']; ?>">        
                <label class="form-label">Nombre del programa:</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre del programa" name="txtPrograma" value="<?php echo $row['nombre']; ?>">
                <div class="mb-3">
                    <label class="form-label">Apellido paterno:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el apellido paterno del responsable" name="txtAp_patRes" value="<?php echo $row['ap_patRes']; ?>">
                    <label class="form-label">Apellido materno:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el apellido materno del responsable" name="txtAp_matRes" value="<?php echo $row['ap_matRes']; ?>">
                    <label class="form-label">Nombre del responsable:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre del responsable" name="txtNombreResponsable" value="<?php echo $row['Nombres_Resp']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>