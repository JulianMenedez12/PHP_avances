<?php


// Después de un registro exitoso, redirige al usuario a la página de inicio de sesión con un mensaje de éxito.

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nombre_usuario = $_GET['nombre_usuario'];
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $correo = $_GET['correo'];
    $clave = $_GET['clave'];

    include('funciones.php');
    $resultado = registro($nombre_usuario, $nombre, $apellidos, $correo, $clave);

    echo $resultado;
}
header("Location: login_f.php?registro=exitoso");
exit;


?>
