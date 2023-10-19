<?php
include ('encriptación.php');
function registro($documento)
{
    $nombrer='';
    $salida = "";
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'sqlite');

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }


    $sq = "SELECT (nombre) from personass where Documento='$documento'";
    
    $resultado = $conexion->query($sq);
    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0];
    $conexion->close();
    $nombrer=desencriptar($salida);
       
    }

    return ($nombrer);
}
echo registro();
