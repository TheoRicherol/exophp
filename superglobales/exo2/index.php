<?php
session_start();

$_SESSION['firstname'] = "Théo";
$_SESSION['lastname'] = "Richerol";
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="user.php" method="post">
        <button type="submit">GO</button>
    </form>
</body>

</html> 