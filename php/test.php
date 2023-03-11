<?php
include("../inc/mysql.php");
$query = "SELECT * FROM client";
$q = mysqli_query($co, $query);
$test = 'this ;is; "a;test"';
$csv = fopen("client.csv", "a+");
$split = '/([(].*?[)])|\w+/';
preg_match_all($split, $test, $out);
while ($data = mysqli_fetch_assoc($q)) {
    $in = "";
    foreach ($data as $d) {
        if (!is_numeric($d)) {
            $d = '"' . $d . '"';
        }
        $in = $in . $d . ";";
    }
    $in = substr(rtrim($in), 0, -1);
    fwrite($csv, $in . PHP_EOL);
}

mysqli_free_result($q);
