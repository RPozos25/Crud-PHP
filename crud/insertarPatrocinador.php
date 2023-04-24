<?php
    include("../config/conexion.php");
    $app = $_POST['txta_pat'];
    $apm = $_POST['txta_mat'];
    $nombres = $_POST['txtNombres'];
    $contrato = $_POST['txtContrato'];
    $duracion = $_POST['txtDuracion'];
    $importe = $_POST['txtImporte'];
    

    $sql = "INSERT INTO patrocinador(a_pat,a_mat,nombresP,No_contrato,duracion,importe_contrato) VALUES ('$app','$apm','$nombres','$contrato','$duracion','$importe')";
    
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudPatrocinador.php");
    } else {
        echo "Datos No insertados";
    }

?>