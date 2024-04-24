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
    <div class="row">
        <div class="col-md-4">
        <div class="container mt-5">
<form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Pesquisar paciente">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>

    <div class="d-flex justify-content-start mb-3">
        <button type="button" class="btn btn-primary">Novo Paciente</button>
        <div class="d-flex justify-content-start mb-3">
            <button type="button" class="btn btn-primary me-2">Novo Paciente</button>
             <button type="button" class="btn btn-primary">Lista de Pacientes</button>
    </div>
    </div>
    <!-- Botões -->

    <div class="container mt-5">
    <div class="d-flex justify-content-start mb-3">
        <button type="button" class="btn btn-primary me-2">Novo Paciente</button>
        <button type="button" class="btn btn-primary">Lista de Pacientes</button>
    </div>
</div>
            <div class="card mb-3">
                <h3 class="card-header">Card header 1</h3>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <!-- Restante do conteúdo do cartão -->
            </div>
        </div>
        <div class="col-md-4">
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

            <div class="card mb-3">
                <h3 class="card-header">Card header 2</h3>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
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

            </div>
        </div>
        <div class="col-md-4">
        <div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <h3 class="card-header">Card header</h3>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                </svg>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>