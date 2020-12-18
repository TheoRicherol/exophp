<?php setlocale(LC_ALL, "fr");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    date_default_timezone_set('UTC');
    strftime("%a");
    echo date("d/m/Y ");
    echo date("d-m-Y");
    echo date(" l d F Y");

    ?>
</body>

</html>