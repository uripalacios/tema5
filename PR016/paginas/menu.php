<?php
require_once "../funciones/validaSession.php";
// comprobar que hay sesion
session_start();
if(!validaSession())
    header("Location: ../login.php")
//y sino te lleva al login exit
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>

<body>
    <header>
        <h1>Menú</h1>
        <div></div>
        <div style="position:relative;float:right">
            <?php
            echo $_SESSION['nombre'];
            ?>
            <a href="../logout.php">Logout</a>
        </div>
    </header>
    <?php
    foreach ($_SESSION['paginas'] as $key => $value) {
        echo "<br><a href='./" . $value . "'>" . $key . "</a>";
    }
    ?>

</body>

</html>