<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Se não estiver autenticado, redireciona para a página de login
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>Bem-vindo, <?php echo $_SESSION['username']; ?>!</p>
    <p>Conteúdo do dashboard...</p>
    <a href="logout.php">Sair</a>
</body>
</html>
