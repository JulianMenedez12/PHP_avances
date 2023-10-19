<?php
echo 'Hola';//impresión 
function consulta(){
    $conexion=mysqli_connect('127.0.0.1','root','root','facturas');//conexion con el servidor/base de datos
    $salida=0;//inicializacion de variable
    $salida=10*2/2;//revaloramos de la varible
    
    return $salida;//retorno de la variable
}
function comer(){
    $conexion=mysqli_connect('127.0.0.1','root','root','facturas');//conexion con el servidor/base de datos
    $salida=0;//inicializacion de variable
    $salida=4*4;//revaloramos de la varible
    $sql="SELECT 2+1 as suma";//orden que se ejecutará en la Base de datos SQL
    $resultado = $conexion->query($sql);//Almacenamos lo que extrajimos de SQL en una variable
    while($fila=mysqli_fetch_assoc($resultado)){
        $salida.=$fila['suma'];//contatenamos la varibale con el resultado de la primera fila
    }


    return $salida;//retorno de la variable
}