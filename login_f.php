<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2 {
            text-align: center;
        }
        form {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
        }
        label, input {
            display: block;
            margin: 10px 0;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            border: none;
            background-color: #444;
            color: #fff;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            margin: 10px 0;
            display: block;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="get" action="verf_aut.php">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" required><br>
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" required><br>
        <input type="submit" value="Iniciar Sesión">
        <a href="registro_f.php">Registrar</a>
        <a href="menu.php">Menú</a>
    </form>
</body>
</html>