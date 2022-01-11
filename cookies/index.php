<?php
    // Array que contiene las cookies (variable superglobal)
    echo "<h1>Cookies</h1>";

    echo "<h2>Array que contiene las cookies</h2>";
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
    
    // Crear una cookie //
    // Se le indica: nombre, valor, fecha de expiracion, ruta y dominio
        // Si no se le indica fecha de expiracion durará la sesión
        // Si no se le indica ruta cogerá por defecto el de la ruta donde ha sido creada
    setcookie("nombre","ismael",time() + 20,"/");

    // Eliminar una cookie //
    // Para eliminar la cookie se establece el tiempo negativo
    setcookie("nombre2","ismael2",time() - 1,"/");

?>