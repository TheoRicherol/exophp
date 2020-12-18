<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    function true</p>
    <?php 
    $calendar = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
    
    echo $calendar[2];
    echo $calendar[5];
    
    foreach ($calendar as $key => $value) {
        echo "$value ";
    }


    ?>
</body>
</html>