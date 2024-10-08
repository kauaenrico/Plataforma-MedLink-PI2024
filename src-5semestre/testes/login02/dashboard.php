<?php
// Inicia a sessão
session_start();
// Verifica se o usuário está autenticado
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    // Se não estiver autenticado, redireciona de volta para a página de login
    header("Location: login.html");
    exit; // Termina a execução do script
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
    <h2>Painel de Controle</h2>
    <p>Bem-vindo, você está autenticado.</p>
    <!-- Conteúdo da página de dashboard -->
</body>
</html>
