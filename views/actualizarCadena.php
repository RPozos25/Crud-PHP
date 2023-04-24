<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar cadena</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
        <h2 class="text-center">Cadena</h2>
        <form action="../crud/actualizarCadena.php" method="post">
            <?php
                include_once("../config/conexion.php");
                $sql = "SELECT * FROM cadena WHERE id_cad =" . $_REQUEST['Id'];
                $resultado = $conexion->query($sql);
                $row = $resultado->fetch_assoc();
            ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_cad']; ?>">
                <label class="form-label">Sede:</label>
                <input type="text" class="form-control" placeholder="Ingresa la sede" name="txtSede" value="<?php echo $row['sede']?>">
                
                <div class="mb-5">
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
                    <label class="form-label">Nombre de la cadena:</label>
                    <input type="text" class="form-control" placeholder="Ingresa el nombre de la cadena" name="txtCadena" value="<?php echo $row['nombreC']?>">
                    <label for="disabledSelect" class="form-label">Empresa:</label>
                    <select id="disabledSelect" class="form-select" name="empresa">
                        <option selected disabled>Selecciona una opcion</option>
                        <?php
                            include_once("../config/conexion.php");
                            $sqli3 = "SELECT * FROM empresa WHERE id_empr=" .$row['id_empr'];
                            $resultado1 = $conexion->query($sqli3);
                            $row2 = $resultado1->fetch_assoc();
                            echo "<option selected value='" . $row2['id_empr'] . "'>" . $row2['nombreE'] . "</option>";

                            $sql4 = "SELECT * FROM empresa";
                            $resultado3 = $conexion->query($sql4);
                            while ($fila2 =  $resultado3->fetch_array()) {
                                echo "<option value='" . $fila2['id_empr'] . "'>" . $fila2['nombreE'] . "</option>";
                            }

                        ?>
                    </select>
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>