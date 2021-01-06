<?php
locale::defu
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // date_default_timezone_set('Europe/Paris');
    // setlocale(LC_TIME, 'fra_fra');
    // echo utf8_encode(strftime('%A %d %B %Y'));
    // echo date("d/m/Y");
    // echo date("d-m-Y");
    // echo date(" l d F Y");


    setlocale(LC_TIME , "fr_FR.UTF-8");
    // strftime : Format local date and time according to locale settings
    $dateThree = strftime("%A %d %B %Y");
    echo "<b>Nous sommes le $dateThree.</b><br><br>";

    ?>
</body>

</html>