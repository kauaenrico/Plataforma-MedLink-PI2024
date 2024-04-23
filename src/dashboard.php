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

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>