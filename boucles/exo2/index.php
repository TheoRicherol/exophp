<?php
$forLoop1 = 0;
$forLoop2 = 50;
$result;
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
    while ($forLoop1 <= 20) {
        $result = $forLoop1 * $forLoop2;
        echo "$result $forLoop1";
        $forLoop1++;
    }
    ?>

</body>

</html>