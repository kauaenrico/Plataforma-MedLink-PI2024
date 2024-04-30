<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include "header.php";
        ?>
    </header>
    <main class="h-screen flex flex-col items-center justify-center py-2">
        <?php
            if(isset($_GET["page"])){
                switch($_GET["page"]){
                    case "gitpull":
                        include "gitpull.php";
                        break;
                    case "erro":
                        include "error404.html";
                        break;
                    case "dashboard":
                        include "dashboard.php";
                        break;
                    case "admindashboard":
                        include "admindashboard.php";
                        break;
                    default:
                        include "dashboard.php";
                        break;
                }
            }
        ?>
    </main>



</body>
</html>