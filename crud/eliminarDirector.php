<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM director WHERE id_dire ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudDirector.php");
    }
?>