<?php
include('../inc/mysql.php');
$e = $_POST['e'];
$pwd = $_POST['pwd'];
$query = mysqli_query($db, "SELECT * FROM entreprise WHERE nom = '$e' and pwd = '$pwd'");
if (mysqli_num_rows($query) == 0) {
    header('Location:../page/logig.php?err=1');
} else {
    echo "haha";
}
