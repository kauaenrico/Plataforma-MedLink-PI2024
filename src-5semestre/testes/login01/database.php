<?php

$hostName = "10.0.0.19";
$dbUser = "admin";
$dbPassword = "unisal@2024";
$dbName = "plataforma";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>