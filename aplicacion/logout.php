<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?
    //destruir los datos
    session_start();
    session_destroy();
    echo "Ha cerrado la sesion"

?>
    <a href="../aplicacion/login.php">Login</a>
</body>
</html>