<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: dashboard.php");
}
?>

<?php
  if (isset($_POST["login"])) {
    session_start();
    $_SESSION["user"] = "yes";
    header("Location: index.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Clínica | pequenos passos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
  <style>
    body {
      background-color: #d6e7df;
    }
    .login-container {
      margin-top: 5%;
    }
      .imagem{

        border-left: 10%;
      }
  </style>
</head>
<body>
  
  <div class="container">
    <div class="row justify-content-center login-container">
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

</body>
</html>
