<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Traduire ce code avec des if et des else :
        echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    </p>
    <?php
    $gender = "homme";
    if ($gender == "homme") {
        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    }
    ?>
</body>

</html>