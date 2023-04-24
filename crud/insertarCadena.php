<?php
    include("../config/conexion.php");
    $sede = $_POST['txtSede'];
    $director = $_POST['director'];
    $cadena = $_POST['txtCadena'];
    $empresa = $_POST['empresa'];
    

    $sql = "INSERT INTO cadena(sede,id_dire,nombreC,id_empr) VALUES ('$sede','$director','$cadena','$empresa')";
    
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudCadena.php");
    } else {
        echo "Datos No insertados";
    }

?>