<?php
$user = "dev";
$password = "root";
$database = "si";

$db = mysqli_connect('localhost', $user, $password, $database);
mysqli_set_charset($db, 'utf8');
