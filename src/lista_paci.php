<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionais podem ser inseridos aqui */
    </style>
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Gênero</th>
                    <th scope="col">Contato</th>
                    <th scope="col">Terapia</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Maria da Silva</td>
                    <td>15/02/2010</td>
                    <td>Feminino</td>
                    <td>(19) 9876-5432</td>
                    <td>Yoga</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Detalhes</button>
                        <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
        <button type="button" class="btn btn-success">Adicionar Paciente</button>
    </div>

    <!-- Bootstrap JS (opcional, se necessário) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>