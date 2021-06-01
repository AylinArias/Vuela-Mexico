<?php
    require 'conexionBD.php';

    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_regreso = $_POST['fecha_regreso'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $numTarjeta = $_POST['numTarjeta'];
    $cvv = $_POST['cvv'];

    $insertar = "INSERT INTO reservacion VALUES('$nombre','$telefono','$correo','$fecha_salida', '$fecha_regreso','
    $adultos','$niños','$numTarjeta','$cvv')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '<script> alert("guardo correctamente");}
        location.href = "../index.html";
        </script>';
    }
?>