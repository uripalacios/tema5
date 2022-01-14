
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    
    <?php

        // Utilizamos la sesion activa para posteriormente destruirla
        session_start();

        // Cerramos la sesion
        session_destroy();

        echo "Ha cerrado la sesion";
    ?>

    <a href="./login.php">Volver a Login</a>
</body>
</html>