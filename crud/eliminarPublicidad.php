<?php
    include("../config/conexion.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM publicidad WHERE id_publicidad ='$id'";
    $query = mysqli_query($conexion,$sql);
    if($query === TRUE){
        header("location:../views/crudPublicidad.php");
    }
?>