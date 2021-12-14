<?php

    if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])){
        header('WWW-Authenticate: Basic Realm="Contenido Reestringido"');
        header('HTTP/1.0 401 Unauthorized');
        exit;
    }
    //conexion a la bbdd para ver si el usuario 
    if($_SERVER['PHP_AUTH_USER']  == 'uriel' && $_SERVER['PHP_AUTH_PW']){
        echo "Ha iniciado sesion";
    }
?>