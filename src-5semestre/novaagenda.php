<br>
<div class="container my-4">
<div class="container-fluid mt-5">
    <form data-bitwarden-watching="1">
        <fieldset>
            <legend>Novo Agendamento</legend>
            <div class="row">
                <div class="col-md-3">
                    <label for="data" class="form-label mt-3">Data</label>
                    <input type="date" class="form-control" id="data">
                </div>
                <div class="col-md-3">
                    <label for="hora" class="form-label mt-3">Hora</label>
                    <input type="time" class="form-control" id="hora">
                </div>
                <div class="col-md-3">
                    <label for="local" class="form-label mt-3">Agendamento Recorrente</label>
                        <select class="form-select" id="recorrente">
                            <option selected>Apenas uma vez</option>
                            <option value="tododia">Todo dia</option>
                            <option value="todasem">Toda Semana</option>
                            <option value="todomesdia">Todo Mês (Dia Fixo)</option>
                            <option value="todomessemana">Todo Mês (Semana Fixa)</option>
                            <!-- Adicione mais opções de local conforme necessário -->
                        </select>
                </div>
                <div class="col-md-12">
                    <label for="convidarPaciente" class="form-label mt-3">Convidar Paciente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="convidarPaciente" placeholder="Pesquisar paciente">
                        <button class="btn btn-primary" type="button">Pesquisar</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="local" class="form-label mt-3">Local</label>
                    <select class="form-select" id="local">
                        <option selected>Selecione...</option>
                        <option value="sala1">Sala 1</option>
                        <option value="sala2">Sala 2</option>
                        <option value="sala3">Sala 3</option>
                        <option value="sala3">Sala de brinquedos</option>
                        <option value="sala3">Sala 7</option>
                        <option value="sala3">Sala dos terapeutas</option>
                        <!-- Adicione mais opções de local conforme necessário -->
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="terapeuta" class="form-label mt-3">Convidar terapeuta</label>
                    <select class="form-select" id="terapeuta">
                        <option selected>Selecione...</option>
                        <option value="terapeuta1">Camily R.</option>
                        <option value="terapeuta2">Maria S.</option>
                        <option value="terapeuta3">Carlos O.</option>
                        <option value="terapeuta3">Fábio M.</option>
                        <option value="terapeuta3">Gabriel G.</option>
                        <option value="terapeuta3">Letícia B.</option>
                        <!-- Adicione mais terapeutas conforme necessário -->
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="observacoes" class="form-label mt-3">Observações</label>
                    <textarea class="form-control" id="observacoes" rows="3" placeholder="Adicionar uma descrição"></textarea>
                </div>
            </div>
            <div class="d-grid gap-2" href="index.php?page=pagenda">
                <button type="submit" class="btn btn-primary mt-3">Agendar</button>
            </div>
        </fieldset>
    </form>
</div>
</div>