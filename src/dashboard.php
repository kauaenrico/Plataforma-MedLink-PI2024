<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Pesquisar paciente">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <div class="d-flex justify-content-start mt-3">
                <a href="index.php?page=cadpaciente">
                    <button type="button" class="btn btn-primary me-2">Novo Paciente</button>
                </a>
                <a href="#">
                    <button type="button" class="btn btn-primary">Lista de Pacientes</button>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container mt-5">
                <h5 class="text-center mb-4">Agenda do dia- <?php echo date("d/m/Y"); ?></h5>
                <ul class="list-group" style="font-size: 14px;">
                    <?php
                    $horario = strtotime("08:00");
                    $fim_do_dia = strtotime("17:00");
                    while ($horario <= $fim_do_dia) {
                        echo "<li class='list-group-item py-3'>";
                        echo "<strong>" . date("H:i", $horario) . "</strong>";
                        echo "<ul class='list-unstyled mb-0'>";
                        // Verificando e adicionando reuniões
                        switch ($horario) {
                            case strtotime("08:00"):
                                echo "<li class='meeting'>Atendimento com Pedro P. - Sala 1</li>";
                                break;
                            case strtotime("10:00"):
                                echo "<li class='meeting'>Atendimento com Carlos L. - Sala 3</li>";
                                break;
                            case strtotime("13:00"):
                                echo "<li class='meeting'>Atendimento com Fábio M. - Sala 7</li>";
                                break;
                            // Adicione mais casos conforme necessário
                        }
                        echo "</ul>";
                        echo "</li>";
                        // Avança para a próxima hora
                        $horario = strtotime("+1 hour", $horario);
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="container mt-5">
                <div class="card mb-3">
                    <h2 class="card-header">Avisos gerais</h2>
                    <div class="card-body">
                        <h4 class="card-title">Novos brinquedos nas salas!</h4>
                        <h6 class="card-subtitle text-muted">Novas experiências para novos resultados!</h6>
                    </div>
                    <img src="C:\Users\luke.belatine\OneDrive - Centro de Tecnologia Canavieira SA\Área de Trabalho\Unisal_5BI\Imagemclinica.jpeg" width="100%" height="200" alt="Imagem da clínica" style="object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text">Novos jogos e brinquedos que nos possibilitarão um auxílio maior no desenvolvimento de nossos pacientes.</p>
                        <!-- Link "Saiba mais" -->
                        <a href="#" class="btn btn-primary" id="saibaMaisBtn">Saiba mais</a>
                        <!-- Div oculta com informações adicionais -->
                        <div id="infoAdicionais" style="display: none;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Brinquedos sensoriais</li>
                                <li class="list-group-item">Jogos de quebra-cabeça</li>
                                <li class="list-group-item">Livros interativos</li>
                                <li class="list-group-item">Kit de arte</li>
                                <li class="list-group-item">Jogos cooperativos</li>
                                <li class="list-group-item">Livros para leitura conjunta</li>
                                <li class="list-group-item">Caixa de Areia</li>
                            </ul>
                            <div class="card-body">
                                <a href="https://github.com/kauaenrico/UNISAL_Proj_5" class="card-link">Github link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                            <div class="card-footer text-muted">
                                2 dias atrás
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Seleciona o link "Saiba mais" e a div das informações adicionais
    const saibaMaisBtn = document.getElementById('saibaMaisBtn');
    const infoAdicionais = document.getElementById('infoAdicionais');

    // Adiciona um evento de clique ao link "Saiba mais"
    saibaMaisBtn.addEventListener('click', function() {
        // Verifica se a div das informações adicionais está visível
        if (infoAdicionais.style.display === 'none') {
            // Se estiver oculta, torna visível
            infoAdicionais.style.display = 'block';
            // Atualiza o texto do link "Saiba mais" para "Fechar"
            saibaMaisBtn.textContent = 'Fechar';
        } else {
            // Se estiver visível, oculta
            infoAdicionais.style.display = 'none';
            // Atualiza o texto do link "Saiba mais" para "Saiba mais"
            saibaMaisBtn.textContent = 'Saiba mais';
        }
    });
</script>

</body>
</html>
