<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM emisora WHERE id_emis ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudEmisora.php");
    }
?>