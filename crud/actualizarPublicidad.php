<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $duracion = $_POST['txtDuracion'];
    $coste = $_POST['txtCoste'];

    $sql = "UPDATE publicidad SET 
    duracion='".$duracion."',
    coste='".$coste."' 
    WHERE id_publicidad=".$id."";


    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudPublicidad.php");
    }



?>