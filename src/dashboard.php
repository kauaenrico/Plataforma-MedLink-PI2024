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
            width: 50%;
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
<div class="container mt-5">
    <h3 class="text-center mb-4">Agenda de hoje - <?php echo date("d/m/Y"); ?></h3>
    
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
                    echo "<li class='meeting'>Atendimento com Pedro P. - Sala 1</li>";
                    break;
                case strtotime("10:00"):
                    echo "<li class='meeting'>Atendimento com Carlos L. - Sala 3</li>";
                    break;
                case strtotime("13:00"):
                    echo "<li class='meeting'>Atendimento com Fábio M. - Sala 7</li>";
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

<div class="container mt-5">
    <div class="d-flex justify-content-start mb-3">
        <button type="button" class="btn btn-primary">Novo Paciente</button>
    </div>
    <!-- Botão de novo paciente -->
</div>

<form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Pesquisar paciente">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
</body>
</html>