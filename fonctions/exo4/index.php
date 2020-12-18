<?php
$val1 = 5;
$val2=5;
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
    function exo4($val1 , $val2)
    {
        if($val1 < $val2){
            return "Le premier nombre est plus petit";
        }
        elseif($val1 > $val2){
            return"Le premier nombre est plus grand";
        }elseif($val1 == $val2){
            return"Les deux nombres sont identiques";
        }
    }
   echo exo4($val1 , $val2);

    ?>
</body>
</html>