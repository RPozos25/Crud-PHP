<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM franja_h WHERE id_franja ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudFranja.php");
    }
?>