<?
    //destruir los datos
    session_start();
    session_destroy();
    echo "Ha cerrado la sesion"

?>
<a href="./login.php">Login</a>