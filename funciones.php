<?php
echo 'Hola';//impresión 
function consulta(){
    $conexion=mysqli_connect('127.0.0.1','root','root','facturas');//conexion con el servidor/base de datos
    $salida=0;//inicializacion de variable
    $salida=10*2/2;//revaloramos de la varible
    
    return $salida;//retorno de la variable
}
function comer(){
    $mayor = 'es mayor de edad';
    $menor = 'es menor de edad';
    $rse = '';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');
    $sql = "SELECT 17 AS edad";
    $resultado = $conexion->query($sql);
    
    while($fila = mysqli_fetch_assoc($resultado)){
        $salida = $fila['edad'];
        if ($salida >= 18){
            $salida = $salida . ' ' . $mayor;
        } else {
            $salida = $salida . ' ' . $menor;
        }
    }

    return $salida;
}