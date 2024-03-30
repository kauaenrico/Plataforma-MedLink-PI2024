<?php

$hostName = "localhost";
$dbUser = "plataforma";
$dbPassword = "unisal@2024";
$dbName = "plataforma";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>