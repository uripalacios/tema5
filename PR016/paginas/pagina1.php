<?php
    require_once "../funciones/validaSession.php";
    // comprobar que hay sesion
    session_start();
    validaSession();
    //y sino te lleva al login exit
    if(!validaPagina(basename($_SERVER['PHP_SELF']))){
        header("Location: ../403.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>

<body>

    <header>
        <h1>Pagina1</h1>
        <div style="position:relative;float:right">
            <?php
            echo $_SESSION['nombre'];
            ?>
            <a href="../logout.php">Logout</a>
        </div>
    </header>
</body>

</html>