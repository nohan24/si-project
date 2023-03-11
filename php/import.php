<?php
include('../inc/mysql.php');
$t = fopen('client.csv', 'r+');
while ($d = fgets($t)) {
    $tab = explode(";", $d);
    foreach ($tab as $s) {
        echo $s;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="client.csv">fd</a>
</body>

</html>