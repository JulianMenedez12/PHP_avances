<?php
include ('encriptación.php');
function registro($documento, $nombre, $clave)
{
    $salida = "";
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'sqlite');

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $clave=encriptar($clave);

    $sq = "INSERT INTO personass (documento, nombre, clave) VALUES ('$documento', '$nombre', '$clave')";
    
    $resultado = $conexion->query($sq);


    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();

    return $salida;
}



?>