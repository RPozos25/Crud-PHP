<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM empresa WHERE id_empr ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudEmpresa.php");
    }
?>