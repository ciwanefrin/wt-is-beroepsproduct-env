<?php
$naam = 'Jwan Naasan';

$vandaag = date_create('now');
$datum = $vandaag->format('d-M-Y');


$date=date_create();
date_date_set($date,2020,10,30);
echo date_format($date,"Y/m/d");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.
    <br><br>
    Het duurt nog <?= $date ?>.
</body>
</html>