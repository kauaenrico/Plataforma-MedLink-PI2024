<?php
#session_start();
#if (!isset($_SESSION["user"])) {
#   header("Location: login.php");
#}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" crossorigin="anonymous">
    <title>Dashboard</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PROJETO Dashboard </h1>
    </div>
        <div>
        <h2>Agenda de Reuniões - <?php echo date("d/m/Y"); ?></h2>

<table>
    <tr>
        <th>Data</th>
        <th>Nome</th>
        <th>Sala</th>
    </tr>
    <tr>
        <td><?php echo date("d/m/Y"); ?></td>
        <td>Pedro P.</td>
        <td>Sala 1</td>
    </tr>
    <tr>
        <td><?php echo date("d/m/Y"); ?></td>
        <td>Carlos L.</td>
        <td>Sala 3</td>
    </tr>
    <tr>
        <td><?php echo date("d/m/Y"); ?></td>
        <td>Fábio M.</td>
        <td>Sala 7</td>
    </tr>
</table>
        </div>
</body>
</html>