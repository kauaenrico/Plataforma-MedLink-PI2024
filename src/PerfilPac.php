<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-container {
            margin-top: 50px;
            text-align: center;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container profile-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="patient.jpg" alt="Foto do Paciente" class="profile-img">
            <h2>João da Silva</h2>
            <p>Idade: 10 anos</p>
            <div class="profile-info">
                <h4>Descrição:</h4>
                <p>
                    João é um paciente muito animado e adora brincar com seus brinquedos favoritos, especialmente seus carros de controle remoto.
                    Ele gosta de passar o tempo ao ar livre e é muito sociável. Ele também adora desenhar e pintar.
                </p>
                <h4>Diagnósticos:</h4>
                <ul>
                    <li>Autismo leve</li>
                    <li>TDAH (Transtorno de Déficit de Atenção e Hiperatividade)</li>
                </ul>
                <h4>Remédios:</h4>
                <ul>
                    <li>Risperidona - 2mg</li>
                    <li>Methylphenidate - 10mg</li>
                </ul>
                <h4>Brinquedos Favoritos:</h4>
                <ul>
                    <li>Carros de controle remoto</li>
                    <li>Blocos de construção</li>
                    <li>Bolas de futebol</li>
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
