<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $categoria = $_GET['categoria'];
    $contenido = $_GET['contenido'];
    $imgs = $_GET['imgs'];
    $id_news = $_GET['id_news'];

    include('funciones.php');
    $resultado = subirnews($categoria, $contenido, $imgs, $id_news);

    echo $resultado;
}
header("Location: news_f.php?registro=exitoso");
exit;


?>