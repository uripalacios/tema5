<?php

    if($_SERVER["PHP_AUTH_USER"] != "otroUsuario")
    {
        header("Location: ./perfil.php");
    }
    echo "Nombre:" . $_SERVER["PHP_AUTH_USER"] . "<br>";
    echo "Contraseña:" . $_SERVER["PHP_AUTH_PW"];
?>