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
                <img src="src/assets/img/Children.png" alt="Foto do Perfil" class="perfil-foto">
                <h3>Paulo Pereira</h3>
                <p>13 anos</p>
            </div>
            <div class="col-md-8">
                <div class="descricao">
                    <h4>Resumo Médico:</h4>
                    <p>João é um paciente muito animado e adora brincar com seus brinquedos favoritos, especialmente seus carros de controle remoto.
                    Ele gosta de passar o tempo ao ar livre e é muito sociável. Ele também adora desenhar e pintar.</p>
                </div>
                <div class="remedios">
                    <h4>Medicamentos</h4>
                        <li>Methylphenidate - 10mg</li>
                        <li>Risperidona - 2mg</li>
                </div>
                <div class="Diagnóticos">
                    <h4>Diagnóticos</h4>
                        <li>Autismo leve</li>
                        <li>TDAH (Transtorno de Déficit de Atenção e Hiperatividade)</li>
                </div>
                <div class="outras-informacoes">
                    <h4>Informações Relevantes:</h4>
                    <ul>
                    <li>Brinquedos Favoritos</li>
                            <p>Carros de controle remoto</p>
                            <p>Blocos de construção</p>
                            <p>Bolas de futebol</p>
                            <p>Brinquedos que brilham</p>
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
