<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $programa = $_POST['txtPrograma'];
    $pat = $_POST['txtAp_patRes'];
    $mat = $_POST['txtAp_matRes'];
    $nomRes = $_POST['txtNombreResponsable'];

    $sql = "UPDATE programa SET 
    nombre='".$programa."',
    ap_patRes='".$pat."',
    ap_matRes='".$mat."',
    Nombres_Resp='".$nomRes."'
    WHERE id_progr=".$id."";



    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudPrograma.php");
    }



?>