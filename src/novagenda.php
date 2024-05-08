<div class="container-fluid mt-5">
    <form data-bitwarden-watching="1">
        <fieldset>
            <legend>Novo Agendamento</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="data" class="form-label mt-3">Data</label>
                    <input type="date" class="form-control" id="data">
                </div>
                <div class="col-md-6">
                    <label for="hora" class="form-label mt-3">Hora</label>
                    <input type="time" class="form-control" id="hora">
                </div>
                <div class="col-md-12">
                    <label for="paciente" class="form-label mt-3">Paciente</label>
                    <select class="form-select" id="paciente">
                        <option selected>Selecione...</option>
                        <option value="paciente1">Paciente 1</option>
                        <option value="paciente2">Paciente 2</option>
                        <option value="paciente3">Paciente 3</option>
                        <!-- Adicione mais pacientes conforme necessário -->
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="terapeuta" class="form-label mt-3">Terapeuta</label>
                    <select class="form-select" id="terapeuta">
                        <option selected>Selecione...</option>
                        <option value="terapeuta1">Terapeuta 1</option>
                        <option value="terapeuta2">Terapeuta 2</option>
                        <option value="terapeuta3">Terapeuta 3</option>
                        <!-- Adicione mais terapeutas conforme necessário -->
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="observacoes" class="form-label mt-3">Observações</label>
                    <textarea class="form-control" id="observacoes" rows="3" placeholder="Observações"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Agendar</button>
        </fieldset>
    </form>
</div>
