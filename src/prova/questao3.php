<!-- Desenvolva um Formulário em PHP que seja capaz de receber as informações de um Vendedor:
- ID
- Nome
- Data Nascimento
- Telefone
- CPF
- Endereço
- Email
- Data de Admissão
- Regional
Os dados devem ser armazenados em uma tabela no Banco de Dados MySQL -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $data_admissao = $_POST['data_admissao'];
    $regional = $_POST['regional'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "admin";
    $password = "unisal@2024";
    $dbname = "loja";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Prepara e executa a consulta SQL
    $sql = "INSERT INTO vendedores (nome, data_nascimento, telefone, cpf, endereco, email, data_admissao, regional) 
            VALUES ('$nome', '$data_nascimento', '$telefone', '$cpf', '$endereco', '$email', '$data_admissao', '$regional')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo vendedor cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
} else {
    echo "Método de requisição inválido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para Vendedor</title>
</head>
<body>
    <h1>Cadastro de Vendedor</h1>
    <form action="questao3.php" method="post">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="data_admissao">Data de Admissão:</label>
        <input type="date" id="data_admissao" name="data_admissao" required><br>

        <label for="regional">Regional:</label>
        <input type="text" id="regional" name="regional" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>