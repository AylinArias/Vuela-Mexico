<?php
    $servidor = "localhost";
    $nombreUsuario = "root";
    $password = "";
    $db = "vuelaMexicoDB";

    $conexion = new mysqli($servidor, $nombreUsuario, $password, $db);

    if($conexion ->connect_error){
        die("Conexion fallida: " .$conexion ->connect_error);
    }

    /*$sql = "CREATE DATABASE vuelaMexicoDB" ;
    if($conexion ->query($sql) === true){
        echo "Base de datos creado correctamente...";
    }else{
        die("Erro al crear base de datos: ". $conexion->connect_error);
    }
    */

    $sql = "CREATE TABLE reservacion(
        idCorreo VARCHAR(100) PRIMARY KEY NOT NULL,
        nombre VARCHAR(45) NOT NULL,
        telefono INT(10) NOT NULL,
        contraseña VARCHAR(30),
        fecha_salida DATE NOT NULL,
        fecha_regreso DATE NOT NULL,
        adultos INT NOT NULL,
        niños INT NOT NULL,
        tarjeta INT(16) NOT NULL,
        cvv INT(4) NULL,
        asientos INT(50) NOT NULL
    )";   

    $sql = "CREATE TABLE contacto(
        idCorreoCo VARCHAR(100) PRIMARY KEY NOT NULL,
        nombre VARCHAR(45) NOT NULL,
        telefono VARCHAR(10) NOT NULL,
        textosugerencia VARCHAR(150) NOT NULL
    )";


    if($conexion ->query($sql) === true){
        echo "La tabla se creo correctamente...";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }


?>