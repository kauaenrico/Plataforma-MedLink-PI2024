<style>
    .body {
        border-left: 5px solid black;
        border-right: 5px solid black;
        margin-left: 15px;
        margin-right: 15px;
    }
</style>

<form data-bitwarden-watching="1">
    <fieldset>
        <div class="body">
            <legend>Informações do Terapeuta</legend>
            <div class="row">
                <div class="col-md-6">
                    <label for="cpf" class="form-label mt-3">CPF</label>
                    <input type="text" class="form-control" id="cpf" placeholder="CPF">
                </div>
                <div class="col-md-6">
                    <label for="nome" class="form-label mt-3">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="col-md-6">
                    <label for="nascimento" class="form-label mt-3">Data de Nascimento</label>
                    <input type="date" class="form-control" id="nascimento">
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label mt-3">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" placeholder="Telefone">
                </div>
                <div class="col-md-6">
                    <label for="cargo" class="form-label mt-3">Cargo</label>
                    <input type="text" class="form-control" id="cargo" placeholder="Cargo">
                </div>
                <div class="col-md-6">
                    <label for="especializacao" class="form-label mt-3">Especialização</label>
                    <input type="text" class="form-control" id="especializacao" placeholder="Especialização">
                </div>
                <div class="col-md-12">
                    <label for="observacoes" class="form-label mt-3">Observações</label>
                    <textarea class="form-control" id="observacoes" rows="3" placeholder="Observações"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="status" class="form-label mt-3">Status</label>
                    <select class="form-select" id="status">
                        <option selected>Selecione...</option>
                        <option value="ativo">Ativo</option>
                        <option value="inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        </div>
    </fieldset>
</form>
