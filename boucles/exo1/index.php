<?php
$forLoop = 0;
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
    while ($forLoop <= 10) {
        echo "$forLoop ";
        $forLoop++;
    }
    ?>

</body>

</html>