<?php
$genre = "Femme";
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
    function majority($g, $a)
    {
        return $g === "Homme" ? "Vous êtes un homme" : "Vous êtes une femme";
        return $a < 18 ? "mineur" : "majeur";
    }
    majority($genre , $age);
    ?>
</body>

</html>