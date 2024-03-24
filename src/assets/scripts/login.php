<?php
// Conexão com o banco de dados
$servername = "10.0.0.20"; // Endereço IP do seu servidor MySQL
$username = "admin"; // Nome de usuário do MySQL
$password = "unisal@2024"; // Senha do MySQL
$dbname = "plataforma"; // Nome do seu banco de dados

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM profissionais WHERE profiss_cpf = '$usuario' AND profiss_passwd = '$senha'";
    $result = $conn->query($sql);

    // Verificar se o usuário existe no banco de dados
    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        // Redirecionar para a página de perfil ou outra página protegida
        header("Location: perfil.php");
        exit;
    } else {
        // Credenciais inválidas
        echo "Usuário ou senha incorretos.";
    }
}

// Fechar conexão com o banco de dados
$conn->close();
?>
