<?php
require_once "./funciones/consultas.php";
   if(isset($_REQUEST['codigo'])){
       $codigo = $_REQUEST['codigo'];
       $producto = buscaProducto($codigo);

       if(!isset($_COOKIE['visitado'])){
           echo "no hay cookie";
           setcookie('visitado',$codigo, time()+1254356,'/');
       }else{
            setcookie('visitado',$codigo, time()+1254356,'/');
       }
   }else{
       header('Location: index.php');
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
    <?php
        if(isset($producto)){
            echo "<h1>".$producto['nombre']."</h1>";
            echo "<p>".$producto['descripcion']."</p>";
            echo "<img src='./".$producto["alta"] ."'>";
        }
    ?>
    <br>
    <a href="./index.php">Volver</a>
</body>
</html>