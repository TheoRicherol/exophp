<?php
if(isset($_POST['gender']) && isset($_POST['name']) && isset($_POST['firstname']) && isset($_FILES['file'])){
$gender = $_POST['gender'];
$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$file = $_FILES['file']['name'];
$file_path = pathinfo($_FILES['file']['name']);
$extension = $file_path['extension'];}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (empty($_POST)) {
    ?>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <select name="gender" id="gender">
                <option value="Mister">Mr</option>
                <option value="Miss">Mme</option>
            </select>
            <input type="text" placeholder="name" id="name" name="name">
            <input type="text" placeholder="firstname" id="firstname" name="firstname">
            <input type="file" name="file" id="file">
            <button type="submit">Envoyez</button>
        </form>
    <?php
    }
    if (!empty($_POST) && $extension == "pdf") {
       echo "Bonjour $gender $firstname $name $file $extension";
    } else if(isset($file) && $extension != "pdf"){
        echo "Mauvais fichier";
    }
    ?>
</body>

</html>