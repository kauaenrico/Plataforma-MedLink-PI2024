<br>
<div class="container-fluid mt-5">
    <div class="row justify-content-center align-items-start"> <!-- Adicionado justify-content-center para centralizar as colunas -->
        <div class="col-md-4">
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Pesquisar paciente">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <br>
            <div class="d-grid gap-2" href="index.php?page=pmateriais">
                    <button class="btn btn-lg btn-primary">Materiais para download</button>
            </div>
            <?php include "dashboard/profissOnline.php"; ?>
        </div> <!-- Fim da primeira coluna -->

        <!-- Segunda coluna -->
        <div class="col-md-4">
            <div class="container mt-5">
            <?php include "dashboard/agendaDia.php"; ?>
            </div>
        </div>

        <!-- Terceira coluna -->
        <div class="col-md-4">
            <div class="container mt-5">
            <?php include "dashboard/avisosDash.php"; ?>
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


        // Seleciona o link "Saiba mais" e a div das informações adicionais
        const pacdodiabtn = document.getElementById('pacdodiabtn');
    const pacdodia = document.getElementById('pacdodia');

    // Adiciona um evento de clique ao link "Saiba mais"
    pacdodiabtn.addEventListener('click', function() {
        // Verifica se a div das informações adicionais está visível
        if (pacdodia.style.display === 'none') {
            // Se estiver oculta, torna visível
            pacdodia.style.display = 'block';
            // Atualiza o texto do link "Saiba mais" para "Fechar"
            pacdodiabtn.textContent = 'Fechar';
        } else {
            // Se estiver visível, oculta
            pacdodia.style.display = 'none';
            // Atualiza o texto do link "Saiba mais" para "Saiba mais"
            pacdodiabtn.textContent = 'Mostrar pacientes do dia';
        }
    });
</script>