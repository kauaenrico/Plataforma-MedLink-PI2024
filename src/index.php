<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
echo "Bem-vindo, " . $_SESSION['username'] . "!";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>MedLink | Pequenos Passos</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-32x32.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css"> -->
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <header class="fixed-top">
        <?php
            include "header.php";
        ?>
    </header>
    <main class="h-screen flex flex-col items-center justify-center py-2">
        <?php
            if(isset($_GET["page"])){
                switch($_GET["page"]){
                    case "pmateriais":      include "materiais.php";        break;
                    case "plistaprofiss":   include "listaProfi.php";       break;
                    case "plistapaciente":  include "listaPaci.php";        break;
                    case "pnovaagenda":     include "novaagenda.php";       break;
                    case "pagenda":         include "agendaPage.php";       break;
                    case "pdashboard":      include "dashboard.php";        break;
                    case "pavisosgerais":   include "avisosgerais.php";     break;
                    case "padministracao":  include "administracao.php";    break;
                    case "erro":            include "error404.html";        break;
                    case "pcadpaciente":    include "cadpaciente.php";      break;
                    case "pcadterapeuta":   include "cadterapeuta.php";     break;     
                    default:                include "error404.php";         break;
                }
            }
            if(isset($_GET["pid"])){
                switch($_GET["pid"]){
                    case "54164684089": include "PerfilPac.php";    break;   
                    default:            include "error404.php";     break;
                }
            }
        ?>
    </main>
    


</body>
</html>