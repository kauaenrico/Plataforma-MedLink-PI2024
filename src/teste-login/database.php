<?php

$hostName = "localhost";
$dbUser = "admin";
$dbPassword = "unisal@2024";
$dbName = "plataforma";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>