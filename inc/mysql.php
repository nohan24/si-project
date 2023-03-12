<?php
$user = "dev";
$password = "root";
$database = "si";

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
