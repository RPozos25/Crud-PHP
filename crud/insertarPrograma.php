<?php
    include("../config/conexion.php");
    $programa = $_POST['txtPrograma'];
    $appR = $_POST['txtAp_patRes'];
    $apmR = $_POST['txtAp_matRes'];
    $nombreR = $_POST['txtNombreResponsable'];

    $sql = "INSERT INTO programa(nombre,ap_patRes,ap_matRes,Nombres_Resp) VALUES ('$programa','$appR','$apmR','$nombreR')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudPrograma.php");
    } else {
        echo "Datos No insertados";
    }

?>