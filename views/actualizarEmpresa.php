<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar empresa</title>
</head>

<body>
    <?php include("./barra.php"); ?>



    <div class="container">
    <h2 class="text-center">Empresa</h2>
        <form action="../crud/actualizarEmpresa.php" method="post">
        <?php
                include_once("../config/conexion.php");
                $sql = "SELECT * FROM empresa WHERE id_empr =" . $_REQUEST['Id'];
                $resultado = $conexion->query($sql);
                $row = $resultado->fetch_assoc();
            ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_empr']; ?>">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" placeholder="Ingresa el nombre de la empresa" name="txtNombre" value="<?php echo $row['nombreE']; ?>">
                <div class="mb-3">


                    
                <label for="disabledSelect" class="form-label">Patrocinador:</label>
                    <select id="disabledSelect" class="form-select" name="patrocinador">
                        <option selected disabled>Selecciona una opcion</option>
                        <?php
                        include_once("../config/conexion.php");
                        $sqli2 = "SELECT * FROM patrocinador WHERE id_patr=" .$row['id_patr'];
                        $resultado3 = $conexion->query($sqli2);
                        $row2 = $resultado3->fetch_assoc();
                        echo "<option selected value='" . $row2['id_patr'] . "'>" . $row2['nombresP'] . "</option>";

                        $sql3 = "SELECT * FROM patrocinador";
                        $resultado4 = $conexion->query($sql3);
                        while ($fila2 =  $resultado4->fetch_array()) {
                            echo "<option value='" . $fila2['id_patr'] . "'>" . $fila2['nombresP'] . "</option>";
                        }
                        ?>
                    </select>


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




                    <label class="form-label">Direccion:</label>
                    <input type="text" class="form-control" placeholder="Ingresa la direccion" name="txtDireccion" value="<?php echo $row['direccion']; ?>">
                    <label class="form-label">Codigo Postal:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el codigo postal" name="txtCodigo" value="<?php echo $row['CP']; ?>">
                    <label class="form-label">NIF:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el NIF" name="txtNif" value="<?php echo $row['NIF']; ?>">





                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>



</body>

</html>