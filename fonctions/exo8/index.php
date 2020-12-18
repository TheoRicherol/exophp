<?php
$param1 = 0;
$param2 = 1;
$param3 = 2;
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
    function sum($p1 = 0, $p2=0,$p3=0){
       return $p1 += $p2 += $p3;
    }
    echo sum($param1 , $param2 , $param3)
    ?>
</body>

</html>