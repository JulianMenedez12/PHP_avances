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
    $sql = "INSERT INTO usuario VALUES ('$id','$nombre','$edad','$tel','$id_pais')";//Orden a ejecutar en la base de datos
    $r=$conexion->query($sql);//Ejecuta la orden en la base de datos
    return;//return null
}
function borrarUserBETA($id_user){
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');//conecta con la base de datos
    $sql="delete from usuario where id_user='$id_user'";//Orden a ejecutar en la base de datos
    $r=$conexion->query($sql);//Ejecuta la orden en la base de datos
    return;
}

function borrarUsuario($id_user){
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');//conexion con la DATABASE
    $sql = "DELETE FROM usuario WHERE id_user = '$id_user'";//consulta sql 
    
    if(mysqli_query($conexion, $sql)){
        if(mysqli_affected_rows($conexion) > 0){
            return "Usuario eliminado correctamente. ";
        } else {
            return "No se encontró ningún usuario con ese ID. ";
        }
    }
}

function UpdtSite($sitio, $id_user){
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');
    $sql = "UPDATE usuario SET sitio='$sitio' WHERE id_user='$id_user'";
    
    if(mysqli_query($conexion, $sql)){
        if(mysqli_affected_rows($conexion) > 0){
            return "Se actualizó el sitio correctamente";
        } else {
            return "No se encontró ningún usuario con ese ID   ";
        }
    } else {
        return "Hubo un error al actualizar";
    }
}
function MostrarSite($id_user){
    $salida='';
    $web='';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');
    $sql = "SELECT (sitio) as sitio from usuario where id_user='$id_user'";
    $r=$conexion->query($sql);//almacena los datos obtenidos de la base de datos en una variable
    //navega en las filas obtenidas
    while($fila=mysqli_fetch_assoc($r)){
        $web=$fila['sitio'];
        $salida="<a href='".$web."'>ir a el sitio</a>";
}
return $salida;
}
function updtlink($id_user,$link){
    $salida='';
    $resul='';
    $result='';
    $web='';
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'facturas');
    $sql = "SELECT (sitio) as sitio from usuario where id_user='$id_user'";
    $sql1="UPDATE usuario SET invitacion='$link' WHERE id_user='$id_user'";
    $resul==$conexion->query($sql1);
    $sql2="SELECT invitacion from usuario where id_user=$id_user'";
    $result==$conexion->query($sql2);
    while($fila=mysqli_fetch_array($result)){
        $link=$fila[0];
    $r=$conexion->query($sql);//almacena los datos obtenidos de la base de datos en una variable
    //navega en las filas obtenidas
    while($fila=mysqli_fetch_assoc($r)){
        $web=$fila['sitio'];
        $salida="<a href='".$web."'>";
        $salida.="$link";
        $salida.="</a>";
}
return $salida;
}

}