<?

// session_start();
// print_r($_SESSION);
// $_SESSION['var1'] = "mi primero sesion entrando 3 vez";
// session_destroy();
// print_r($_SESSION);
// echo session_id();
// echo session_name();

//lo primero usamos session_start
session_start();

//autenticacion
if(isset($_REQUEST['valida'])){
    //valida que el usuario este en la BBDD
    //comprobar que no este vacio y contraseña 8 caracteres
    if($_REQUEST['user']== 'uriel' && $_REQUEST['pass'] == 'uriel'){
        $_SESSION['user']=$_REQUEST['user'];
        $_SESSION['pass']=$_REQUEST['pass'];
        $_SESSION['validada']=true;
        header("Location: ./detalle.php");
        exit;
    }
}else
    // if($_SESSION['validada']){
    //     header("Location: ./detalle.php");
    //     exit;
    // }

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
    <form action="./login.php" method="post">
        <label for="user">Usuario</label><input type="text" name="user" id="user">
        <label for="pass">Contraseña</label><input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Login" name="valida">
    </form>
</body>
</html>