<?php
    include_once("../config/conexion.php");
    $id = $_POST['id'];
    $sede = $_POST['txtSede'];
    $director = $_POST['director'];
    $cadena = $_POST['txtCadena'];
    $empresa = $_POST['empresa'];

    $sql = "UPDATE cadena SET 
    sede='".$sede."',
    id_dire='".$director."',
    nombreC='".$cadena."',
    id_empr='".$empresa."' 
    WHERE id_cad=".$id."";

    

    if($resultado =  $conexion->query($sql)){
        header("location:../views/crudCadena.php");
    }



?>