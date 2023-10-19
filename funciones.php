<?php
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
    $sql = "SELECT 19 AS edad";
    $resultado = $conexion->query($sql);
    
    while($fila = mysqli_fetch_assoc($resultado)){
        $salida = $fila['edad'];
        if ($salida >= 18){
            $salida = $salida.'<br>'.$mayor;
        } else {
            $salida = $salida.'<br>'.$menor;
        }
    }

    return $salida;
}
function contar_usuarios(){
    $salida=0;//inicializacion de variable
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');//conecta con la base de datos
    $sql="SELECT count(nombre) FROM usuario";//orden a ejecutar en la base de datos
    $r=$conexion->query($sql);//almacena los datos obtenidos de la base de datos en una variable
    //navega en las filas obtenidas
    while($fila=mysqli_fetch_array($r)){
        $salida = $fila[0];//almacena datos en la variable
    }
    return $salida;//retorna la variable con los datos almacenados
}
function insertar_personas($id,$nombre,$edad,$tel,$id_pais){
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');//conecta con la base de datos
    $sql = "INSERT INTO usuario VALUES ('$id','$nombre','$edad','$tel','$id_pais')";
    $r=$conexion->query($sql);
    return;
}