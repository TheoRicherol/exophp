<?php
$name = "Richerol";
$fname = "Théo";
$age = 25;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        String</p>
    <?php
    function exo6($p, $n, $a)
    {
        return "Bonjour, je m'appelle $p $n et j'ai $a ans" ;
    }
    echo exo6($name , $fname , $age); ?>

</body>

</html>