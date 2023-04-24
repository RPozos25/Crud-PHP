<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $patrocinador = $_POST['patrocinador'];
    $director = $_POST['director'];
    $direccion = $_POST['txtDireccion'];
    $codigo = $_POST['txtCodigo'];
    $nif = $_POST['txtNif'];

    $sql = "UPDATE empresa SET 
    
    nombreE='".$nombre."',
    id_patr='".$patrocinador."',
    id_dire='".$director."',
    direccion='".$direccion."',
    CP='".$codigo."',
    NIF='".$nif."' 
    WHERE id_empr=".$id."";


    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudEmpresa.php");
    }



?>