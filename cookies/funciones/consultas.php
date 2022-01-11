<?php

    require "./seguro/conexionBD.php";
    function buscaProductos(){
        $array = null;
        
        try {

            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $con->prepare("select * from producto");
            $sql->execute();

            $array = $sql->fetchAll();
            // while($row)

        } catch (PDOException $th) {
            echo "Error al buscar en la base de datos";
        }finally{
            return $array;
            unset($con);
        }
    }
    function buscaProducto($codigo){
        $array = null;
        
        try {

            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = $con->prepare("select * from producto where codigo = ?");
            $sql->bindParam(1,$codigo);
            $sql->execute();

            $producto = $sql->fetch();
            // while($row)

        } catch (PDOException $th) {
            echo "Error al buscar en la base de datos";
        }finally{
            return $producto;
            unset($con);
        }
    }

?>