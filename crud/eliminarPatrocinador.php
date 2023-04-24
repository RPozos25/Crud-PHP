<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM patrocinador WHERE id_patr ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudPatrocinador.php");
    }
?>