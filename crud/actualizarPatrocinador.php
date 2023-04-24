<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $pat = $_POST['txta_pat'];
    $mat = $_POST['txta_mat'];
    $nombre = $_POST['txtNombres'];
    $contrato = $_POST['txtContrato'];
    $duracion = $_POST['txtDuracion'];
    $importe = $_POST['txtImporte'];

    $sql = "UPDATE patrocinador SET 
    a_pat='".$pat."',
    a_mat='".$mat."',
    nombresP='".$nombre."',
    No_contrato='".$contrato."',
    duracion='".$duracion."',
    importe_contrato='".$importe."' 
    WHERE id_patr=".$id."";


    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudPatrocinador.php");
    }



?>