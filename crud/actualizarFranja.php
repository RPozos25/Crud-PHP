<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $hora = $_POST['hora'];
    $semana = $_POST['semana'];
    $duracion= $_POST['txtDuracion'];

    $sql = " UPDATE franja_h SET
    hora_inicio='".$hora."',
    dia_semana='".$semana."',
    duracion='".$duracion."' 
    WHERE id_franja=".$id."";

   


    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudFranja.php");
    }



?>