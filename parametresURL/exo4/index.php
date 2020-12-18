<?php
$testVar = ($_SERVER['QUERY_STRING'] =="");
$language = $_GET["language"];
$server = $_GET["server"];
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
        Teste variables URL
        <?php
    if(!$testVar){
        echo "$language $server";
    }    
    ?>
</p>


</body>

</html>