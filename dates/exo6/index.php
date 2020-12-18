<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fstFev = mktime(0,0,0,2,1,2016);
    $lstFev = mktime(0,0,0,3,1,2016);

    $fevDay = $lstFev - $fstFev;

    echo $fevDay/3600/24;

    ?>
</body>

</html>