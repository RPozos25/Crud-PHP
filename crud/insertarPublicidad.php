<?php
    include("../config/conexion.php");
    $duracion = $_POST['txtDuracion'];
    $coste = $_POST['txtCoste'];

    $sql = "INSERT INTO publicidad(duracion,coste) VALUES ('$duracion','$coste')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudPublicidad.php");
    } else {
        echo "Datos No insertados";
    }

?>