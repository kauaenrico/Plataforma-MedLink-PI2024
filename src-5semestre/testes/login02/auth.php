<?php
// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se as credenciais estão corretas
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // Inicia a sessão
        session_start();
        // Define uma variável de sessão para indicar que o usuário está autenticado
        $_SESSION["authenticated"] = true;
        // Redireciona para a página de dashboard
        header("Location: dashboard.php");
        exit; // Termina a execução do script
    } else {
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>
