<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $nombre = $_POST['txtNombreD'];
    $pat = $_POST['txtaPD'];
    $mat = $_POST['txtaMD'];

    $sql = "UPDATE director SET 
    nombres='".$nombre."',
    ap_pat='".$pat."',
    ap_mat='".$mat."' 
    WHERE id_dire=".$id."";


    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudDirector.php");
    }



?>