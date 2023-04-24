<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $direccion = $_POST['txtDireccion'];
    $codigo = $_POST['txtCodigoPostal'];
    $banda = $_POST['txtBanda'];
    $director = $_POST['director'];
    $nif = $_POST['txtNif'];
    $provincia = $_POST['txtProvincia'];

    $sql = "UPDATE `emisora` SET 
    nombre='".$nombre."',
    Direccion='".$direccion."',
    CP='".$codigo."',
    Banda_Hz='".$banda."',
    id_dire='".$director."',
    NIF='".$director."',
    Provincia='".$provincia."' 
    WHERE id_emis=".$id."";

    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudEmisora.php");
    }



?>