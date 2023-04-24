<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar emisora</title>
</head>

<body>
    <?php include("./barra.php"); ?>


    <div class="container">
    <h2 class="text-center">Emisora</h2>
        <form action="../crud/actualizarEmisora.php" method="post">
        <?php
            include_once("../config/conexion.php");
            $sql = "SELECT * FROM emisora WHERE id_emis =" . $_REQUEST['Id'];
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_assoc();
        ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_emis']; ?>">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre de la emisora" name="txtNombre" value="<?php echo $row['nombre']; ?>">
                <div class="mb-3">
                    <label class="form-label">Direccion:</label>
                    <input type="text" class="form-control" placeholder="Ingresa la direccion" name="txtDireccion" value="<?php echo $row['Direccion']; ?>">
                    <label class="form-label">Codigo Postal:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el codigo postal" name="txtCodigoPostal" value="<?php echo $row['CP']; ?>">
                    <label class="form-label">Banda HZ:</label>
                    <input type="text" class="form-control" placeholder="Ingresa la banda hz" name="txtBanda" value="<?php echo $row['Banda_Hz']; ?>">
                    <label for="disabledSelect" class="form-label">Director:</label>
                    
                    <select id="disabledSelect" class="form-select" name="director">
                        <option selected disabled>Selecciona una opcion</option>
                        <?php
                        include_once("../config/conexion.php");
                        $sqli = "SELECT * FROM director WHERE id_dire=" .$row['id_dire'];
                        $resultado1 = $conexion->query($sqli);
                        $row1 = $resultado1->fetch_assoc();
                        echo "<option selected value='" . $row1['id_dire'] . "'>" . $row1['nombres'] . "</option>";

                        $sql2 = "SELECT * FROM director";
                        $resultado2 = $conexion->query($sql2);
                        while ($fila =  $resultado2->fetch_array()) {
                            echo "<option value='" . $fila['id_dire'] . "'>" . $fila['nombres'] . "</option>";
                        }
                        ?>
                    </select>


                    <label class="form-label">NIF:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el NIF" name="txtNif" value="<?php echo $row['NIF']; ?>">
                    <label class="form-label">Provincia:</label>
                    <input type="text" class="form-control" placeholder="Ingresa " name="txtProvincia"  value="<?php echo $row['Provincia']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>




</body>

</html>