<?php
$srvName = $_SERVER['SERVER_NAME'];
$ipAdress = $_SERVER['REMOTE_ADDR'];
$userAgt = $_SERVER['HTTP_USER_AGENT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?="Bonjour, vous êtes sur le sevreur $srvName, votre adresse ip est $ipAdress et vous utilisez $userAgt en tant que navigateur" ?>
    <p>
    session</p>
</body>
</html>