<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db = "logtp";
$conn = new mysqli($db_host, $db_user, $db_password, $db);
?>

print_r($_SESSION);