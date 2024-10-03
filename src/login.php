<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     header("Location: index.php?page=pdashboard");
// }

// session_start();
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if ($username == 'aluno' && $password == 'unisal') {
//         // $_SESSION['username'] = $username;
//         header("Location: index.php?page=pdashboard");
//         exit();
//     } else {
//         $error_message = "Usuário ou senha incorretos.";
//     }
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     if ($username == 'aluno' && $password == 'unisal') {
//         header("Location: index.php?page=pdashboard");
//         // exit();
//     } else {
//         $error_message = "Usuário ou senha incorretos.";
//     }
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedLink | Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <div class="tab-container">
            <button class="tab-link active" onclick="openTab(event, 'clientes')">Clientes</button>
            <button class="tab-link" onclick="openTab(event, 'colaboradores')">Colaboradores</button>
        </div>

        <div id="clientes" class="tab-content active">
            <h2>Login Clientes</h2>
            <form action="client-login.php" method="POST">
                <div class="form-group">
                    <label for="usuario-cliente">Usuário</label>
                    <input type="text" id="usuario-cliente" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="senha-cliente">Senha</label>
                    <input type="password" id="senha-cliente" name="senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>

        <div id="colaboradores" class="tab-content">
            <h2>Login Colaboradores</h2>
            <form action="collaborator-login.php" method="POST">
                <div class="form-group">
                    <label for="usuario-colaborador">Usuário</label>
                    <input type="text" id="usuario-colaborador" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="senha-colaborador">Senha</label>
                    <input type="password" id="senha-colaborador" name="senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>

        <footer>
            <p>Projeto Integrador | UNISAL 2024</p>
        </footer>
    </div>

    <script>
        function openTab(evt, tabName) {
            // Esconder todo o conteúdo das abas
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remover a classe 'active' de todos os links
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Mostrar a aba atual e adicionar a classe 'active' ao botão que a abriu
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Mostrar a aba "Clientes" por padrão
        document.getElementById("clientes").style.display = "block";
    </script>
    <style>body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

.tab-container {
    display: flex;
    justify-content: space-around;
    margin-bottom: 20px;
    border-bottom: 1px solid #ddd;
    color: #666666;
}

.tab-link {
    padding: 10px;
    cursor: pointer;
    background-color: #f4f4f9;
    border: none;
    outline: none;
    transition: background-color 0.3s;
}

.tab-link.active {
    background-color: #fff;
    border-bottom: 2px solid #0073e6;
}

.tab-link:hover {
    background-color: #e0e0e0;
}

.tab-content {
    display: none;
    text-align: left;
}

h2 {
    margin-bottom: 20px;
    color: #666666;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-bottom: 10px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #0073e6;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #005bb5;
}

footer {
    margin-top: 20px;
    font-size: 12px;
    color: #777;
    text-align: center;
}
</style>

    
</body>
</html>
