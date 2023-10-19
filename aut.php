<?php
function autenticar($documento, $clave) {
    $salida=0;
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'base1');
    $sq = "SELECT COUNT(nombre) FROM usuario WHERE CC = '$documento' AND contraseña = '$clave'";
    
    $resultado = $conexion->query($sq);

    $conexion->close();

    
    $fila = mysqli_fetch_array($resultado);
    $salida=$fila[0];
    return $salida;
     
    

}
function mostrar($documento,){
    $salida='';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'base1');
    $sq = "SELECT * FROM usuario WHERE CC = '$documento'";
    $resultado = $conexion->query($sq);

    while ($fila = mysqli_fetch_array($resultado)) {
        $salida .= $fila[0] .'<br>';
        $salida .= $fila[1] .'<br>';
        $salida .= $fila[2] .'<br>';
        $salida .= $fila[3] .'<br>';
        $salida .= '<br>';
    }
   
    $conexion->close();

    return $salida;
}
