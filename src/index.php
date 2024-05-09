<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>MedLink | Pequenos Passos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css"> -->
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <header>
        <?php
            include "header.php";
        ?>
    </header>
    <main class="h-screen flex flex-col items-center justify-center py-2">
        <?php
            if(isset($_GET["page"])){
                switch($_GET["page"]){
                    case "gitpull":  include "gitpull.sh";    break;
                    case "plistapaciente":  include "listapaciente.php";    break;
                    case "pnovaagenda":     include "novaagenda.php";       break;
                    case "pagenda":         include "agenda.php";           break;
                    case "pdashboard":      include "dashboard.php";        break;
                    case "pavisosgerais":   include "avisosgerais.php";     break;
                    case "padministracao":  include "administracao.php";    break;
                    case "erro":            include "error404.html";        break;
                    case "pcadpaciente":    include "cadpaciente.php";      break;
                    case "pcadterapeuta":   include "cadterapeuta.php";     break;     
                    default:                include "error404.php";         break;
                }
            }
        ?>
    </main>
    <foo


</body>
</html>