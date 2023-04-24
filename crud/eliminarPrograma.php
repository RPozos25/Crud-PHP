<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM programa WHERE id_progr ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudPrograma.php");
    }
?>