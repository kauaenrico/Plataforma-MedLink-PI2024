<?php

$sname= "10.0.0.40";

$unmae= "admin";

$password = "unisal@2024";

$db_name = "plataforma";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed...";

} else {
    echo "Conexao concluida!";
}
?>