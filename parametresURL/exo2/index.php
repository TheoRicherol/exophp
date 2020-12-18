<?php
$name = $_GET["lastname"];
$firstname = $_GET["firstname"];
$age = $_GET["age"];
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
        function true
        <?php

    function testAge($a){
        if(!isset($a)){
            echo "L'âge n'est pas défini";
        }else{
            echo $a;
        }
    }
    testAge($age);

    
    ?>
</p>


</body>

</html>