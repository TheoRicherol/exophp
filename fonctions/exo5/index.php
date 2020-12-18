<?php
$str = "String";
$str2 = "String2";
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
    function exo4($s1, $s2)
    {
        return $s1 + $s2;
    }
    echo exo4($str, $str2);

    ?>
</body>

</html>