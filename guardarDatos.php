<?php
    header('Content-Type: text/html; charset=UTF-8');

    $conexion = new mysqli("localhost", "root", "","vuelaMexicoDB");

  if(isset($_POST['texto'])){
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $fecha_salida = $_POST['fecha_salida'];
    $fecha_regreso = $_POST['fecha_regreso'];
    $adultos = $_POST['adultos'];
    $niños = $_POST['niños'];
    $numTarjeta = $_POST['numTarjeta'];
    $cvv = $_POST['cvv'];
  

    $sql = "INSERT INTO reservacion(nombre, telefono, correo, fecha_salida, fecha_regreso, 
    adultos, niños,numTarjeta,cvv) values('$nombre','$telefono','$correo','$fecha_salida', '$fecha_regreso','
    $adultos','$niños','$numTarjeta','$cvv')";

    $resultado = mysqli_query($conexion, $sql);
    if(!$resultado){
        echo 'Error al regsitrarse';
    }else{
        echo 'Exito';
    }
}

    mysqli_close($conexion);
  /*  require 'pdf/fpdf/fpdf.php';

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial', 'B', 15);

    $pdf ->Cell(100, 10, "Comprobante de boleto", 1 , 1, 'C');
    $pdf ->SetFont('Arial','B',10);
*/
?>
