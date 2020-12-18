<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    function true</p>
    <?php 
        $calendar = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
        $replacement = array(7=>"août");
        $new_cal = array_replace($calendar , $replacement);
        var_dump($new_cal);?>
</body>
</html>