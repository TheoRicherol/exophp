<?php
session_start();
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    setcookie("login", htmlspecialchars($login), time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie("mdp", $pass, time() + 365 * 24 * 3600, '/', null, false, true);
    header("Location: user.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="login" id="login">
        <input type="password" name="pass" id="pass">
        <button type="submit">GO</button>
    </form>
</body>

</html>