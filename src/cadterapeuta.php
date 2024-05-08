<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css" crossorigin="anonymous">
    <title>Cadastrar novo terapeuta</title>
</head>
<body>

<div class="container-fluid mt-5">
    <form data-bitwarden-watching="1">
        <fieldset>
            <div class="body">
                <legend>Cadastrar novo terapeuta</legend>
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
                        <label for="departamento" class="form-label mt-3">Departamento de atuação</label>
                        <input type="text" class="form-control" id="departamento" placeholder="Departamento">
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label mt-3">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" placeholder="Telefone">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label mt-3">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label mt-3">Status</label>
                        <select class="form-select" id="status">
                            <option selected>Selecione...</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="senha" class="form-label mt-3">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <div class="col-md-12">
                        <label for="gestor" class="form-label mt-3">Gestor Imediato</label>
                        <input type="text" class="form-control" id="gestor" placeholder="Gestor Imediato">
                    </div>
                    <div class="col-md-12">
                        <label for="observacoes" class="form-label mt-3">Observações</label>
                        <textarea class="form-control" id="observacoes" rows="3" placeholder="Observações"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
        </fieldset>
    </form>
</div>

</body>
</html>
