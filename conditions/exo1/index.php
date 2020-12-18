<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Créer une variable **age** et l'initialiser avec une valeur.
        Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.
    </p>
    <?php
    $age = 19;
    if ($age < 18) {
        echo 'Vous êtes mineur';
    } else {
        echo 'Vous êtes majeur';
    }

    ?>
</body>

</html>