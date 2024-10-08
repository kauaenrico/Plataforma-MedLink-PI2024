<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Aqui você pode processar os dados recebidos, como salvar em um banco de dados ou enviar por email

    // Redireciona de volta para o formulário
    header("Location: login.php");
    exit;
}
?>
