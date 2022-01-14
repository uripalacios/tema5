<?php
    require_once "./funciones/validaSession.php";
    // Llama a verificar sesión
    session_start();
    if(validaSession()) 
        header("Location: ./paginas/menu.php");
    

?>
    

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
      
        <!-- Formulario que paso por 'post' -->
        <form action="./funciones/valida.php" method="post">

            <label for="user">Usuario:</label>
            <input type="text" name="user" id="user">

            <br><br>

            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" id="pass">
            
            <br>
            <br>
            <input type="submit" value="login" name="valida">
            
        </form>

    </body>
    </html>