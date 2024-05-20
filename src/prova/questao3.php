<!-- Kaua Enrico Pasti Altran - RA 220019627 -->
<!-- Desenvolva um Formulário em PHP que seja capaz de receber as informações de um Vendedor:
(Os dados devem ser armazenados em uma tabela no Banco de Dados MySQL)
    - ID
    - Nome
    - Data Nascimento
    - Telefone
    - CPF
    - Endereço
    - Email
    - Data de Admissão
    - Regional
 -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dataNasc = $_POST['dataNasc'];
    $tel = $_POST['tel'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $data_admissao = $_POST['data_admissao'];
    $regional = $_POST['regional'];

    // Banco MySQL
    $servername = "localhost";
    $username = "admin";
    $password = "unisal@2024";
    $dbname = "loja";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    $sql = "INSERT INTO vendedores (id, name, dataNasc, tel, cpf, endereco, email, data_admissao, regional) 
            VALUES ('$id', '$name', '$dataNasc', '$tel', '$cpf', '$endereco', '$email', '$data_admissao', '$regional')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo vendedor cadastrado com sucesso!";} else {echo "Erro: " . $sql . "<br>" . $conn->error;}
    $conn->close();
} else {
    echo "Método de requisição inválido.";}
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
        <label for="name">Nome Completo:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="dataNasc">Data do Nascimento:</label>
        <input type="date" id="dataNasc" name="dataNasc" required><br>
        <label for="tel">telefone:</label>
        <input type="text" id="tel" name="tel" required><br>
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="data_admissao">Data da Admissão:</label>
        <input type="date" id="data_admissao" name="data_admissao" required><br>
        <label for="regional">Regional:</label>
        <input type="text" id="regional" name="regional" required><br>
        <input type="submit" value="Realizar cadastro">
    </form>
</body>
</html>