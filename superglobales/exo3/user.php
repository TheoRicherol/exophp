<?php 
session_start();
$login = $_POST['login'];
if(isset($login)){
setcookie("login",htmlspecialchars($login),time() + 365*24*3600 , '/','', false,true);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
if(isset($_COOKIE['login'])){
    ?>
    <form action="user.php" method="post">
    <input type="text" name="login" id="login">
    <button type="submit">go</button>
    </form>
<?php } else {
    echo "Vous n'avez pas défini de cookie";
    ?>
    <form action="index.php" method="post">
        <button type="submit">Definissez-en</button>
    </form>
<?php }
    ?>
</body>
</html>