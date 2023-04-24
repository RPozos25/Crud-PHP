<?php
    include("../config/conexion.php");
    $nombre = $_POST['txtNombreD'];
    $app = $_POST['txtaPD'];
    $apm = $_POST['txtaMD'];
    

    $sql = "INSERT INTO director(nombres,ap_pat,ap_mat) VALUES ('$nombre','$app','$apm')";
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudDirector.php");
    } else {
        echo "Datos No insertados";
    }

?>