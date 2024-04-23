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
    <div class="container mt-5">
    <h2 class="mb-4">Agenda de Reuniões - <?php echo date("d/m/Y"); ?></h2>
    
    <ul class="list-group">
        <?php
        $horario = strtotime("08:00");
        $fim_do_dia = strtotime("17:00");
        while ($horario <= $fim_do_dia) {
            echo "<li class='list-group-item'>";
            echo "<strong>" . date("H:i", $horario) . "</strong>";
            echo "<ul class='list-unstyled'>";
            
            // Verificando e adicionando reuniões
            switch ($horario) {
                case strtotime("08:00"):
                    echo "<li class='meeting'>Reunião com Pedro P. - Sala 1</li>";
                    break;
                case strtotime("09:00"):
                    echo "<li class='meeting'>Reunião com Carlos L. - Sala 3</li>";
                    break;
                case strtotime("10:00"):
                    echo "<li class='meeting'>Reunião com Fábio M. - Sala 7</li>";
                    break;
                // Adicione mais casos conforme necessário
            }

            echo "</ul>";
            echo "</li>";

            // Avança para a próxima hora
            $horario = strtotime("+1 hour", $horario);
        }
        ?>
    </ul>
</div>
</body>
</html>