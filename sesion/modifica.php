<?php
    
    session_start();
    //validar que hay sesion
    //enviar login
    if(!isset($_SESSION['validada'])){
        header('Location: ./login.php');
        exit;
    }
    //validar que se ha enviado desde formulario
    //Hacer lo quue nos hayan pedido
    if(count($_POST)==0){
        header("Location: ./detalle.php");
        exit;
    }else{
        if(isset($_POST['crear']) || isset($_POST['reset'])){
            $_SESSION['contador']=0;
        }else if(isset($_POST['sumar'])){
            $_SESSION['contador']++;
        }else{
            $_SESSION['contador']--;
        }
        header("Location: ./detalle.php");
        exit;
    }
?>