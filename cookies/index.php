<?php
/*COOOKIES
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
    setcookie("nombre","uriel",time() + 20,"/");

    // Eliminar una cookie //
    // Para eliminar la cookie se establece el tiempo negativo
    setcookie("nombre2","uriel2",time() - 1,"/");
 */   
    require_once "./funciones/consultas.php";
    $array = buscaProductos();
    if(isset($_COOKIE['visitado'])){
        $arrayCookie = $_COOKIE['visitado'];
        $arrayVisitados = array();
        foreach ($arrayCookie as $key => $value) {
            array_push($arrayVisitados,buscaProducto($value));
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1>Productos</h1>    
                <table class="table">
                    <thead>
                        <td><b>Nombre</b></td>
                        <td><b>Imagen</b></td>
                        <td><b>Ver</b></td>
                    </thead>
                    <tbody>
                        <?php
                        // Por cada producto...
                        foreach ($array as $key => $value)
                        {
                            echo "<tr>";
                            echo "<td>" . $value["nombre"] . "</td>";
                            echo "<td><img src='" . $value["baja"] . "'></td>";
                            echo "<td><a href='./ver.php?codigo=" . $value["codigo"] . "'>Ver</a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <h3>Ultimas visitas</h3>
                <?php
                foreach ($arrayVisitados as $producto) {
                    # code...
                    echo $producto['nombre'].
                    "<br><img src='./".$producto["baja"] ."'>";
                    echo "<br>";
                
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>