<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("./extensiones.php"); ?>
    <title>Actualizar franja</title>
</head>

<body>
    <?php include("./barra.php"); ?>
    <div class="container">
    <h2 class="text-center">Franja</h2>

        <form action="../crud/actualizarFranja.php" method="post">
        <?php
                include_once("../config/conexion.php");
                $sql = "SELECT * FROM franja_h WHERE id_franja =" . $_REQUEST['Id'];
                $resultado = $conexion->query($sql);
                $row = $resultado->fetch_assoc();
        ?>
            <div class="mb-3">
                <input type="hidden" id="disabledTextInput" class="form-control"  name="id" value="<?php echo $row['id_franja']; ?>">
                <label class="form-label">Hora de inicio:</label>
                <input type="time" name="hora" required value="<?php echo $row['hora_inicio']; ?>">
                <div class="mb-3">
                   
                    <label class="form-label">Dia de la semana:</label>
                    <select class="form-select" name="semana">
                        <option selected disabled>Selecciona una opcion</option>
                        <?php
                        echo "<option selected value='" . $row['dia_semana'] . "'>" . $row['dia_semana'] . "</option>";
                        ?>
                        <option value="Domingo">Domingo</option>";
                        <option value="Lunes">Lunes</option>";
                        <option value="Martes">Martes</option>";
                        <option value="Miercoles">Miercoles</option>";
                        <option value="Jueves">Jueves</option>";
                        <option value="Viernes">Viernes</option>";
                        <option value="Sabado">Sabado</option>";
                    </select>






                    <label class="form-label">Duración:</label>
                    <input type="text" class="form-control" placeholder="Ingresa la duración" name="txtDuracion" value="<?php echo $row['duracion']; ?>">
                    <button type="submit" class="btn btn-primary my-3">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>