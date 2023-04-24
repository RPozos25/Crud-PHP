<?php

    $host="localhost";
    $database="empresa_radio";
    $user="root";
    $pass="1234";

    $conexion = mysqli_connect($host,$user,$pass,$database);
    

    if(!$conexion){
        die("Conexion Fallida: ". mysqli_connect_error());
    }
?>