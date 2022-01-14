<?php


function valida($user,$pass)
{

    try
    {

        // Nos conectamos a la BBDD
        $con = new PDO("mysql:host=" . HOST . ";dbname=" . BBDD,USER,PASS);

        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // Consulta
        $sql = $con->prepare("select * from usuarios where usuario = :user and clave = :pass;");

        // Se le pasan los parámetros
        $sql->bindParam(":user",$user);
        
        $encriptada = sha1($pass);
        $sql->bindParam(":pass",$encriptada);

        // Ejecuto 
        $sql->execute();

        // Aprovechamos a coger el nombre y el perfil

        // Si ha habido registros... (existe el usuario)
        if($sql->rowCount() == 1)
        {
            // Inicio sesion
            session_start();

            // Guardamos en el array de session el nombre, usuario y perfil
            $row = $sql->fetch();

            $_SESSION["validada"] = true;
            $_SESSION["usuario"] = $row["usuario"];
            $_SESSION["nombre"] = $row["nombre"];
            $_SESSION["perfil"] = $row["perfil"];

            //paginas a las que tiene acceso
                  
            $sqlp =$con->prepare("select descripcion,url 
            from paginas p join accede a on (p.codigo=a.codigoPagina)
            where codigoPerfil = :perfil");
            $sqlp->bindParam(":perfil",$_SESSION["perfil"]);
            $sqlp->execute();

            $paginas = array();
            while($row = $sqlp->fetch())
            {
                $paginas[$row[0]]=$row[1];
            }
            $_SESSION['paginas']=$paginas;

            // Cierre de conexion
            unset($con);
            
            return true;
        }
        else
        {
            // Cierre de conexion
            unset($con);

            return false;
        }

    }
    catch(PDOException $ex)
    {
        echo "Error: " . $ex;
    }
}

?>