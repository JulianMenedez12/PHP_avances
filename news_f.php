<!DOCTYPE html>
<html>
<head>
    <title>Subir Noticia</title>
    <style>
        body {
            background-color: #fff; /* Fondo blanco */
            color: #333; /* Texto oscuro */
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
        }
        form {
            background-color: #fff; /* Fondo blanco */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 300px;
            margin: 0 auto; /* Centra el formulario horizontalmente */
        }
        label, input {
            display: block;
            margin: 10px 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #d9534f; /* Borde rojo */
        }
        input[type="submit"] {
            background-color: #fff; /* Blanco */
            color: #d9534f; /* Rojo */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #ccc; /* Gris claro al pasar el mouse */
        }
        a {
            text-decoration: none;
            color: #d9534f; /* Rojo para los enlaces */
            margin: 10px 0;
            display: block;
            text-align: center;
        }
        a:hover {
            color: #c9302c; /* Rojo más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <h2>Subir Noticia</h2>
    <form method="get" action="verf_new.php">
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" required>

        <label for="contenido">Contenido:</label>
        <input type="text" name="contenido" required>

        <label for="imgs">Img Link:</label>
        <input type="text" name="imgs" required>

        <label for="id_news">Identificador de Noticia:</label>
        <input type="text" name="id_news" required>

        <input type="submit" value="Subir">

        <a href="login_f.php">Iniciar Sesión</a>
        <a href="menu.php">Menú</a>
    </form>
</body>
</html>
