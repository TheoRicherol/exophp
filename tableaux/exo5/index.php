<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        function true
    <?php
    $hautsDeFrance = array(62 => "Pas-de-Calais", 59 => "Nord", 80 => "Somme", 60 => "Oise", 02 => "Aisne");
    // var_dump(($hautsDeFrance));
    // echo $hautsDeFrance[59];

    $hautsDeFrance[51] = "Marne";

    foreach ($hautsDeFrance as $key => $value) {
        echo "$value ";
    }
    ?>
    <br>
    <?php
        foreach ($hautsDeFrance as $key => $value) {
            echo "Le département $value porte le numéro $key <br>";
        }
    
    ?>
</p>


</body>

</html>