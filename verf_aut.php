<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre_usuario = $_GET['nombre_usuario'];
    $clave = $_GET['clave'];

    include 'funciones.php';

    $resultado = autenticar($nombre_usuario, $clave);

    if ($resultado == "Autenticación exitosa") {
        echo "Inicio de sesión exitoso. Bienvenido, $nombre_usuario.";
    } else {
        echo "Error de inicio de sesión: $resultado";
    }
}
include('noticias.html');