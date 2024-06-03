<!-- <?php
session_start();
header("Location: index.php?page=pdashboard");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
    <style>
        body {
            background-color: #d6e7df;
        }

        .login-container {
            margin-top: 10%;
        }

        .imagem {
            border-left: 10%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center login-container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <table>
                        <tr>
                            <td>
                                <h4 class="mb-0">Login</h4>
                            </td>
                            <td>
                                <img src="assets\img\Pquenos_passos_Login.png" alt="Imagem pequenos passos" width="30%" height="auto" class="imagem">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                    <!-- <form action="login-redirect.php" method="post"> -->
                    <form action="login.php" method="post">
                    <div class="form-group">
                            <label for="username">Usuário</label>
                            <input type="text" class="form-control" id="username" placeholder="Digite seu usuário">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                        </div>
                        <button type="submit" value="Login" name="login" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
