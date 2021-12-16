<?php 

    // Le indico que requiero autenticacion (si no se ha pedido antes)
    // SI no existen el user o la pass..
    if(!isset($_SERVER["PHP_AUTH_USER"]) || !isset($_SERVER["PHP_AUTH_PW"]))
    {
        header("WWW-Authenticate: Basic Realm='Contenido Restringido'");
        header("HTTP/1.0 401 Unauthorized");
        exit;
    }

    // Si el usuario y la contraseña son correctos...
    // Conexion a la BBDD
    if(($_SERVER["PHP_AUTH_USER"] == "otroUsuario") && ($_SERVER["PHP_AUTH_PW"] == "otroUsuario"))
    {
        header("Location: ./detalle.php");
    }
?>