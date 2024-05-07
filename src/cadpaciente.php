    <style>
        .col-md-6 {
            border-left: 20px;
            border-right: 20px;
        }
    </style>

<form data-bitwarden-watching="1">
  <fieldset>
    <legend>Informações do Paciente</legend>
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
        <label for="inicio_terapia" class="form-label mt-3">Início da Terapia</label>
        <input type="date" class="form-control" id="inicio_terapia">
      </div>
      <div class="col-md-6">
        <label for="responsavel" class="form-label mt-3">Responsável</label>
        <input type="text" class="form-control" id="responsavel" placeholder="Responsável">
      </div>
      <div class="col-md-6">
        <label for="telefone" class="form-label mt-3">Telefone</label>
        <input type="tel" class="form-control" id="telefone" placeholder="Telefone">
      </div>
      <div class="col-md-6">
        <label for="autresp" class="form-label mt-3">Autorização do Responsável</label>
        <input type="text" class="form-control" id="autresp" placeholder="Autorização do Responsável">
      </div>
      <div class="col-md-6">
        <label for="condicao" class="form-label mt-3">Condição</label>
        <input type="text" class="form-control" id="condicao" placeholder="Condição">
      </div>
      <div class="col-md-6">
        <label for="terapia" class="form-label mt-3">Terapia</label>
        <input type="text" class="form-control" id="terapia" placeholder="Terapia">
      </div>
      <div class="col-md-6">
        <label for="autimagem" class="form-label mt-3">Autorização de Imagem</label>
        <input type="text" class="form-control" id="autimagem" placeholder="Autorização de Imagem">
      </div>
      <div class="col-md-6">
        <label for="alergias" class="form-label mt-3">Alergias</label>
        <input type="text" class="form-control" id="alergias" placeholder="Alergias">
      </div>
      <div class="col-md-6">
        <label for="preferencias" class="form-label mt-3">Preferências</label>
        <input type="text" class="form-control" id="preferencias" placeholder="Preferências">
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
  </fieldset>
</form>

<!-- </body>
</html> -->
