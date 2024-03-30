<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
</head>

<body>
    <form method="post" action="testephp10.php">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">
        <br>
        <button type="submit" name="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        header("Location: phpinfo.php");
    }
    ?>
</body>

</html>