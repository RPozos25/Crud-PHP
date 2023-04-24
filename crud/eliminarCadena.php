<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM cadena WHERE id_cad ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudCadena.php");
    }
?>