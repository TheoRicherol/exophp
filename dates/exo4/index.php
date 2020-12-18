<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $date = mktime(15,0,0,7,2,2016);
    date_default_timezone_set('UTC');
    // echo time();
    echo (time() - $date) / 3600 / 24;

    ?>
</body>

</html>