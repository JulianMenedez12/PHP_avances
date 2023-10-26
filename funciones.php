<?php
/**
 * inserta datos en la tabla usuarios para registrar usuarios nuevos 
 * Autor: Brahymer Juleam Elkin Mendez Pinzón
 * @param string $nombre_usuario Variable para almacenar el nombre de usuario o nickName de el usuario a registrar.
 * @param sting $nombre Variable para almacenar el nombre de el usuario a registrar.
 * @param int $apellidos Variable para almacenar los apellidos de el usuario a registrar.
 * @return string $correo Variable para almacenar el correo de el usuario a registrar.
 * @return string $clave Variable para almacenar la contraseña sin encriptar de el usuario a registrar.
 */
function registro($nombre_usuario,$nombre,$apellidos,$correo,$clave)
{
    $salida = "";//inicialización de la varibale salida como texto
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'periodista');//realiza la conexión con la base de datos

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $clave=encriptar($clave);//tomamos la $clave sin encriptar y se encripta 

    $sq = "INSERT INTO tb_usuarios (user_nombre,nombres,apellidos,correo,contraseña) VALUES ('$nombre_usuario', '$nombre','$apellidos','$correo', '$clave')";//consulta SQL a realizar en la base de datos
   
    $resultado = $conexion->query($sq);//Almacenamos los datos obtenidos de la base de datos(SQL)


    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }

    $conexion->close();//cerramos la conexión

    return $salida;//retornamos la variable $salida
}

/**
 * Autentica y/o compara los datos de ingreso con los de la base de datos.
 * Autor: Brahymer Juleam Elkin Mendez Pinzón
 * @param string $nombre_usuario Variable para almacenar el nombre de usuario o nickName de el usuario que intenta ingresar.
 * @return string $clave Variable para almacenar la contraseña sin encriptar que el usuario ingresó.
 */
function autenticar($nombre_usuario, $clave) {
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'periodista');//realiza la conexión.

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $clave = encriptar($clave);//encripta la variable $clave llamando a la función encriptar.

    $sq = "SELECT COUNT(nombres) FROM tb_usuarios WHERE user_nombre = '$nombre_usuario' AND contraseña = '$clave'";//Consulta SQL que realiza el conteo comprobando los datos ingresados.
   
    $resultado = $conexion->query($sq);//se almacenan los resultados obtenidos de la base de datos.

    if ($resultado->num_rows == 1) {//compara el resultado obtenido en el conteo, si es 1 la autenticacion es exitosa.
        $fila = mysqli_fetch_array($resultado);
        if ($fila[0] == 1) {
            die ("Autenticación exitosa, Bienvenid@ $nombre_usuario");
        }
    }
    die ("Datos incorrectos");// si el conteo obtenido es diferente a 1 la autenticacion es fallida.
   
    $conexion->close();
}
/**
 * inserta datos en la tabla noticias.
 * Autor: Brahymer Juleam Elkin Mendez Pinzón.
 * @param string $categoria Variable para almacenar la categoria de la noticia a subir.
 * @param string $contenido Almacena todo el contenido de la noticia que se muestra a el usuario.
 * @param int $img allí se pone el link de la imagen de la noticia.
 * @return string $id_news Variable que funciona como identificador de la noticia(se usa como llave primaria).
 */
function subirnews($categoria,$contenido,$img,$id_news){
    $conexion = mysqli_connect('127.0.0.1', 'root', 'root', 'periodista');//realiza la conexión

    if (!$conexion) {
        die("Error al conectar a la base de datos:" . mysqli_connect_error());
    }

    $sql="INSERT INTO news_upt(categoria,contenido,imgs,id_news) VALUES ('$categoria','$contenido','$img','$id_news')";//cpnsulta SQL para ingresar los datos en la tabla.

    $r= $conexion->query($sql);//alamacena los datos obtenidos de la base de datos.

    //Muestra a el usuario si hubo o no error en subir la noticia
    if ($resultado) {
        $salida = "Registro exitoso";
    } else {
        $salida = "Error en el registro: " . $conexion->error;
    }
    $conexion->close();//cierra la conexión.

    return $salida;//retorna la variable salida.
}

/*
* encripta el mensaje que se ingrese
* Autor: Brahymer Juleam Elkin Mendez Pinzón.
* @param string $mensaje Variable para almacenar el mensaje a encriptar.
*/
function encriptar($mensaje){
        $salida='';//inicializa la varable como texto.
        $mensaje=str_replace('a','/',$mensaje);
        $mensaje=str_replace('b','=',$mensaje);
        $mensaje=str_replace('c',')',$mensaje);
        $mensaje=str_replace('d','♣',$mensaje);
        $mensaje=str_replace('e','<',$mensaje);
        $mensaje=str_replace('f','+',$mensaje);
        $mensaje=str_replace('g','[',$mensaje);
        $mensaje=str_replace('h',']',$mensaje);
        $mensaje=str_replace('i','¬',$mensaje);
        $mensaje=str_replace('j','&',$mensaje);
        $mensaje=str_replace('k','°',$mensaje);
        $mensaje=str_replace('l','_',$mensaje);
        $mensaje=str_replace('m','@',$mensaje);
        $mensaje=str_replace('n','↕',$mensaje);
        $mensaje=str_replace('o','^',$mensaje);
        $mensaje=str_replace('p','*',$mensaje);
        $mensaje=str_replace('q','|',$mensaje);
        $mensaje=str_replace('r','☼',$mensaje);
        $mensaje=str_replace('s','♫',$mensaje);
        $mensaje=str_replace('t','♀',$mensaje);
        $mensaje=str_replace('u','♪',$mensaje);
        $mensaje=str_replace('v','►',$mensaje);
        $mensaje=str_replace('w','♠',$mensaje);
        $mensaje=str_replace('x','♥',$mensaje);
        $mensaje=str_replace('y','☻',$mensaje);
        $mensaje=str_replace('z','♦',$mensaje);
        $mensaje=str_replace('á','%',$mensaje);
        $mensaje=str_replace('é','╚',$mensaje);
        $mensaje=str_replace('í','}',$mensaje);
        $mensaje=str_replace('ó','{',$mensaje);
        $mensaje=str_replace('ú','◄',$mensaje);
        $mensaje=str_replace(' ','☺',$mensaje);
        $mensaje=str_replace('B','◘',$mensaje);
        $mensaje=str_replace('A','•',$mensaje);
        $mensaje=str_replace('C','○',$mensaje);
        $mensaje=str_replace('D','◙',$mensaje);
        $mensaje=str_replace('E','♂',$mensaje);
        $mensaje=str_replace('F','¶',$mensaje);
        $mensaje=str_replace('G','↨',$mensaje);
        $mensaje=str_replace('H','↓',$mensaje);
        $mensaje=str_replace('J','→',$mensaje);
        $mensaje=str_replace('I','§',$mensaje);
        $mensaje=str_replace('L','∟',$mensaje);
        $mensaje=str_replace('K','←',$mensaje);
        $mensaje=str_replace('M','↔',$mensaje);
        $mensaje=str_replace('N','▲',$mensaje);
        $mensaje=str_replace('O','▼',$mensaje);
        $mensaje=str_replace('Q','₧',$mensaje);
        $mensaje=str_replace('R','╡',$mensaje);
        $mensaje=str_replace('P','■',$mensaje);
        $mensaje=str_replace('S','∞',$mensaje);
        $mensaje=str_replace('T','Ω',$mensaje);
        $mensaje=str_replace('U','£',$mensaje);
        $mensaje=str_replace('V','╠',$mensaje);
        $mensaje=str_replace('W','╫',$mensaje);
        $mensaje=str_replace('X','δ',$mensaje);
        $mensaje=str_replace('Y','┼',$mensaje);
        $mensaje=str_replace('Z','Σ',$mensaje);
        $mensaje=str_replace('1','®',$mensaje);
        $mensaje=str_replace('2','Þ',$mensaje);
        $mensaje=str_replace('3','Ž',$mensaje);
        $mensaje=str_replace('4','©',$mensaje);
        $mensaje=str_replace('5','‰',$mensaje);
        $mensaje=str_replace('6','¢',$mensaje);
        $mensaje=str_replace('7','½',$mensaje);
        $mensaje=str_replace('8','¾',$mensaje);
        $mensaje=str_replace('9','™',$mensaje);
        $mensaje=str_replace('0','€',$mensaje);
   
        $salida=$mensaje;//le damos a la varibale el valos que obtenemos de la encriptación.
    return $salida;//retornamos salida.
    }
/*
* Desencripta el mensaje que se ingrese
* Autor: Brahymer Juleam Elkin Mendez Pinzón.
* @param string $mensaje Variable para almacenar el mensaje a Desencriptar.
*/
    function desencriptar($mensaje){
        $salida='';//inicializamos la variable como texto.
        $mensaje=str_replace('/','a',$mensaje);
        $mensaje=str_replace('=','b',$mensaje);
        $mensaje=str_replace(')','c',$mensaje);
        $mensaje=str_replace('♣','d',$mensaje);
        $mensaje=str_replace('<','e',$mensaje);
        $mensaje=str_replace('+','f',$mensaje);
        $mensaje=str_replace('[','g',$mensaje);
        $mensaje=str_replace(']','h',$mensaje);
        $mensaje=str_replace('¬','i',$mensaje);
        $mensaje=str_replace('&','j',$mensaje);
        $mensaje=str_replace('°','k',$mensaje);
        $mensaje=str_replace('_','l',$mensaje);
        $mensaje=str_replace('@','m',$mensaje);
        $mensaje=str_replace('↕','n',$mensaje);
        $mensaje=str_replace('^','o',$mensaje);
        $mensaje=str_replace('*','p',$mensaje);
        $mensaje=str_replace('|','q',$mensaje);
        $mensaje=str_replace('☼','r',$mensaje);
        $mensaje=str_replace('♫','s',$mensaje);
        $mensaje=str_replace('♀','t',$mensaje);
        $mensaje=str_replace('♪','u',$mensaje);
        $mensaje=str_replace('►','v',$mensaje);
        $mensaje=str_replace('♠','w',$mensaje);
        $mensaje=str_replace('♥','x',$mensaje);
        $mensaje=str_replace('☻','y',$mensaje);
        $mensaje=str_replace('♦','z',$mensaje);
        $mensaje=str_replace('%','á',$mensaje);
        $mensaje=str_replace('╚','é',$mensaje);
        $mensaje=str_replace('}','í',$mensaje);
        $mensaje=str_replace('{','ó',$mensaje);
        $mensaje=str_replace('◄','ú',$mensaje);
        $mensaje=str_replace('☺',' ',$mensaje);
        $mensaje=str_replace('◘','B',$mensaje);
        $mensaje=str_replace('•','A',$mensaje);
        $mensaje=str_replace('○','C',$mensaje);
        $mensaje=str_replace('◙','D',$mensaje);
        $mensaje=str_replace('♂','E',$mensaje);
        $mensaje=str_replace('¶','F',$mensaje);
        $mensaje=str_replace('↨','G',$mensaje);
        $mensaje=str_replace('↓','H',$mensaje);
        $mensaje=str_replace('→','J',$mensaje);
        $mensaje=str_replace('§','I',$mensaje);
        $mensaje=str_replace('∟','L',$mensaje);
        $mensaje=str_replace('←','K',$mensaje);
        $mensaje=str_replace('↔','M',$mensaje);
        $mensaje=str_replace('▲','N',$mensaje);
        $mensaje=str_replace('▼','O',$mensaje);
        $mensaje=str_replace('₧','Q',$mensaje);
        $mensaje=str_replace('╡','R',$mensaje);
        $mensaje=str_replace('■','P',$mensaje);
        $mensaje=str_replace('∞','S',$mensaje);
        $mensaje=str_replace('Ω','T',$mensaje);
        $mensaje=str_replace('£','U',$mensaje);
        $mensaje=str_replace('╠','V',$mensaje);
        $mensaje=str_replace('╫','W',$mensaje);
        $mensaje=str_replace('δ','X',$mensaje);
        $mensaje=str_replace('┼','Y',$mensaje);
        $mensaje=str_replace('Σ','Z',$mensaje);
        $mensaje=str_replace('®','1',$mensaje);
        $mensaje=str_replace('Þ','2',$mensaje);
        $mensaje=str_replace('Ž','3',$mensaje);
        $mensaje=str_replace('©','4',$mensaje);
        $mensaje=str_replace('‰','5',$mensaje);
        $mensaje=str_replace('¢','6',$mensaje);
        $mensaje=str_replace('½','7',$mensaje);
        $mensaje=str_replace('¾','8',$mensaje);
        $mensaje=str_replace('™','9',$mensaje);
        $mensaje=str_replace('€','0',$mensaje);
        $salida=$mensaje;//almacenamos el valor de el mensaje en salida.
    return $salida;//retornamos salida.
    }