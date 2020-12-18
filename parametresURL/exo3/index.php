<?php
$testVar = ($_SERVER['QUERY_STRING'] =="");
$startDate = $_GET["startDate"];
$endDate = $_GET["endDate"];
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
        echo "$startDate $endDate";
    }    
    ?>
</p>


</body>

</html>