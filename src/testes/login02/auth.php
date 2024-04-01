<?php
session_start();

// Verifica se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Verifica se o usuário e senha são válidos (substitua esta lógica pela sua lógica de autenticação real)
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Aqui você faria a verificação do usuário e senha no seu banco de dados ou outro sistema de autenticação
        // Por exemplo, se o usuário e senha forem válidos, você pode definir uma variável de sessão e redirecionar para o dashboard
        if ($username === 'admin' && $password === '123') {
            // Definindo a variável de sessão para indicar que o usuário está autenticado
            $_SESSION['authenticated'] = true;

            // Redireciona para o dashboard
            header("Location: dashboard.php");
            exit;
        } else {
            header("Location: login.php");
            echo "Usuário ou senha inválidos.";
        }
    } else {
        header("Location: login.php");
        echo "Por favor, preencha todos os campos.";
    }
}
?>
