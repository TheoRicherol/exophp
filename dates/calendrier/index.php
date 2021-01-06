<?php
$months = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre"
];
$start = 2000;
$end = 2100;

$monthSelected = $_POST['months'];
$yearSelected = $_POST['years'];
// Récupération 1er jour du mois et dernier jour du mois en vu du calcul du nombre total de jours dans ce mois
$prevMonth = mktime(0, 0, 0, $monthSelected, 1, $yearSelected);
$startDate = mktime(0, 0, 0, $monthSelected + 1, 1, $yearSelected);
$endDate =  mktime(0, 0, 0, $monthSelected + 2, 1, $yearSelected);
$nbrDaysInPreviousMonth = round(($startDate - $prevMonth) / 3600 / 24);
$nbrDaysInCurrentMonth = round(($endDate - $startDate) / 3600 / 24);
// Récupération du jour de la semaine qui commence le mois
$dayStart = strftime("%u", $startDate);
$dayEnd = 8 - strftime("%u", $endDate);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="http://exophp:8888/dates/calendrier/style.css">
    <title>Calendrier</title>
</head>

<body>
    <form action="index.php" method="post">
        <fieldset>
            <select name="months" id="months">
                <?php
                foreach ($months as $key => $month) {
                ?>
                    <option value="<?= $key ?>" <?= $_POST['months'] == $key ? "selected" : "" ?>><?= $month ?></option>
                <?php
                };
                ?>
            </select>
            <select name="years" id="years">
                <?php
                for ($i = $start; $i <= $end; $i++) {
                ?>
                    <option value="<?= $i ?>" <?= $_POST['years'] == $i ? "selected" : "" ?>><?= $i ?></option>
                <?php
                };
                ?>
            </select>
        </fieldset>
        <fieldset>
            <input type="submit" value="Go">
        </fieldset>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>l</th>
                <th>m</th>
                <th>m</th>
                <th>j</th>
                <th>v</th>
                <th>s</th>
                <th>d</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($i = 1; $i < ($nbrDaysInCurrentMonth + $dayStart); $i++) {
                    if ($i < $dayStart) {
                ?>
                        <td class="bg-light text-secondary"><?= ($nbrDaysInPreviousMonth- $dayStart) + $i +1  ?></td>
                    <?php } else {
                    ?>
                        <td><?= ($i - $dayStart) + 1 ?></td>
                    <?php }
                    if ($i % 7 == 0) {
                    ?>
            </tr>
            <tr>
            <?php
                    }
                }
                if ($dayEnd < 7) {
                    for ($i = 1; $i < $dayEnd +1; $i++) {
            ?>
                <td class="bg-light text-secondary"><?= $i ?></td>

        <?php
                    }
                }

        ?>
            </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>