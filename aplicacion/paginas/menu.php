<?php 
    require_once "../funciones/validaSession.php";
    //comprobar que hay sesion
    session_start();
    validaSession();
    //y sino llevar al login

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
    
    <?php
            echo $_SESSION['nombre'];
        ?>
        <a href="../logout.php">Logout</a>
    <ul>
        <?php
            foreach ($_SESSION['paginas'] as $key => $value) {
                # code...
                echo "<li><a href='./".$value."'>".$key."</a></li>";
            }
        ?>
    </ul>
</body>
</html>