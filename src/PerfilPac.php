<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #d6e7df;
        }

        .perfil-foto {
            width: 200px;
            height: auto;
        }

        .descricao {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="caminho_da_imagem" alt="Foto do Perfil" class="perfil-foto">
                <h3>Nome do Paciente</h3>
                <p>Idade do Paciente</p>
            </div>
            <div class="col-md-8">
                <div class="descricao">
                    <h4>Descrição:</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec quam metus. Duis eget libero et libero interdum tincidunt. Vestibulum dignissim dignissim nisl, nec gravida metus consectetur at. Sed eget volutpat risus.</p>
                </div>
                <div class="outras-informacoes">
                    <h4>Outras Informações:</h4>
                    <ul>
                        <li>Diagnósticos</li>
                        <li>Remédios</li>
                        <li>Brinquedos Favoritos</li>
                        <!-- Adicione mais informações aqui conforme necessário -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
