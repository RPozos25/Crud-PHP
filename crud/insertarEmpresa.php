<?php
    include("../config/conexion.php");
    $nombre = $_POST['txtNombre'];
    $patrocinador = $_POST['patrocinador'];
    $director = $_POST['director'];
    $direccion = $_POST['txtDireccion'];
    $codigo = $_POST['txtCodigo'];
    $nif = $_POST['txtNif'];
   
    

    $sql = "INSERT INTO empresa(nombreE,id_patr,id_dire,direccion,CP,NIF) VALUES ('$nombre','$patrocinador','$director','$direccion','$codigo','$nif')";
    
    
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        header("location:../views/crudEmpresa.php");
    } else {
        echo "Datos No insertados";
    }

?>