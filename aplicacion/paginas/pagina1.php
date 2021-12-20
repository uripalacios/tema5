<?php 
    require_once "../funciones/validaSession.php";
    //comprobar que hay sesion
    session_start();
    validaSession();
    //y sino llevar al login
    if(!validaPagina(basename($_SERVER['PHP_SELF']))){
        header("Location: ../403.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
        <h1>Pagina 1</h1>
        <?php
            echo $_SESSION['nombre'];
        ?>
        <a href="../logout.php">Logout</a>
</body>
</html>