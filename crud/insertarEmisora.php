<?php
    include("../config/conexion.php");
    $emisora = $_POST['txtNombre'];
    $direccion = $_POST['txtDireccion'];
    $codigoP = $_POST['txtCodigoPostal'];
    $banda = $_POST['txtBanda'];
    $director = $_POST['director'];
    $nif = $_POST['txtNif'];
    $provincia = $_POST['txtProvincia'];
    

    $sql = "INSERT INTO emisora(nombre,Direccion,CP,Banda_Hz,id_dire,NIF,Provincia) VALUES ('$emisora','$direccion','$codigoP','$banda','$director','$nif','$provincia')";
    
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudEmisora.php");
    } else {
        echo "Datos No insertados";
    }

?>