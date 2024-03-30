<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>

    <h2>Exemplo de Formulário PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Processamento dos dados do formulário quando o formulário é submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Exibindo os dados inseridos
        echo "<h3>Dados do Formulário:</h3>";
        echo "Nome: " . $name . "<br>";
        echo "E-mail: " . $email . "<br>";
    }
    ?>

</body>
</html>
