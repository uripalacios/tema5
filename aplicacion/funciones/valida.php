<?php

//validadmos el formulario y ponemos los errores
    if(!true){
        header("Location: ../login.php?mensaje=");
        exit;
    }

    //valida si existe el usuario en la bbdd
    require("../seguro/datosBD.php");
    require("../funciones/consultas.php");

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    if(valida($user,$pass)){
        header("Location: ../paginas/menu.php");
    }
?>