<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>

<div class="container-fluid mt-5">
    <div class="row">
        <!-- Coluna da esquerda -->
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="search" placeholder="Pesquisar Paciente">
                <button class="btn btn-primary mt-2">Pesquisar Paciente</button>
            </div>
            <a href="#" class="btn btn-secondary">Lista de Pacientes</a>
        </div>

        <!-- Coluna do meio -->
        <div class="col-md-4">
            <div class="mb-3">
                <input class="form-control" type="search" placeholder="Pesquisar Terapeuta">
                <button class="btn btn-primary mt-2">Pesquisar Terapeuta</button>
            </div>
            <a href="#" class="btn btn-secondary">Lista de Terapeutas</a>
        </div>

        <!-- Coluna da direita -->
        <div class="col-md-4">
            <div class="card mb-3">
                <h2 class="card-header">Avisos Gerais</h2>
                <div class="card-body">
                    <h4 class="card-title">Novos brinquedos nas salas!</h4>
                    <h6 class="card-subtitle text-muted">Novas experiências para novos resultados!</h6>
                </div>
                <img src="Imagemclinica.jpeg" width="100%" height="200" alt="Imagem da clínica" style="object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">Novos jogos e brinquedos que nos possibilitarão um auxílio maior no desenvolvimento de nossos pacientes. Veja exemplos de alguns novos brinquedos que chegaram ao Pequenos Passos</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
