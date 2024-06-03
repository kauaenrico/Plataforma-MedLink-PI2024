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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/zephyr/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <?php if (isset($error_message)): ?>
                            <div class="alert alert-danger">
                                <?php echo $error_message; ?>
                            </div>
                        <?php endif; ?>
                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Usuário</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </form>
                        <div class="d-grid">
                                <a href="index.php?page=pdashboard">
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </a>
                            </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        &copy; 2024
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>