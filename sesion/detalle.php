<?
session_start();
if($_SESSION['validada']){
    echo "nombre:" .$_SESSION['user']."<br>";
    if(isset($_SESSION['contador']))
        echo $_SESSION['contador']."<br>";
    echo session_id();
}else{
    header('Location: ./login.php');
    exit;
}
?>

<form action="./modifica.php" method="post">
    <?php if(!isset($_SESSION['contador'])){ ?>
    <input type="submit" name="crear" value="crear">
    <?php }else{ ?>
    <input type="submit" name="sumar" value="+">
    <input type="submit" name="restart" value="-">
    <input type="submit" name="reset" value="reset">
    <?php } ?>
</form>
<a href="./logout.php">Logout</a>