<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

echo date('d-m-Y', strtotime('+20days'));
?>
<?php
echo date('d-m-Y', strtotime('-22days'));

    ?>
</body>

</html>