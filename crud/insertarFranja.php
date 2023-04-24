<?php
    include("../config/conexion.php");
    $hora = $_POST['hora'];
    $semana = $_POST['semana'];
    $duracion = $_POST['txtDuracion'];
    
   
    $sql = "INSERT INTO franja_h(hora_inicio,dia_semana,duracion) VALUES ('$hora','$semana','$duracion')";
    
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudFranja.php");
    } else {
        echo "Datos No insertados";
    }

?>