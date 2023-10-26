<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
    <style>
        body {
            background-color: #fff; /* Fondo blanco */
            color: #333; /* Texto oscuro */
            font-family: Arial, sans-serif;
        }
        h2 {
            text-align: center;
            color: #333; /* Texto oscuro */
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
        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc; /* Borde gris claro */
        }
        input[type="submit"] {
            background-color: #d9534f; /* Rojo */
            color: #fff; /* Texto blanco */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #c9302c; /* Rojo más oscuro al pasar el mouse */
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
    <h2>Registro de Usuario</h2>
    <form method="get" action="verf_reg.php">
        <label for="nombre_usuario">Nombre de Usuario:</label>
        <input type="text" name="nombre_usuario" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" name="correo" required>

        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" required>

        <input type="submit" value="Registrar">

        <a href="login_f.php">Iniciar Sesión</a>
        <a href="menu.php">Menú</a>
    </form>
</body>
</html>