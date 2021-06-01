<?php
    $servidor = "localhost";
    $nombreUsuario = "root";
    $password = "";

    $conexion = new mysqli($servidor, $nombreUsuario, $password);

    if($conexion ->connect_error){
        die("Conexion fallida: " .$conexion ->connect_error);
    }
    echo "Conexion Exitosa...";
?>