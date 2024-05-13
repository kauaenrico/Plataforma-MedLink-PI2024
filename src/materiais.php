  <div class="container">
    <div class="row">
      <!-- 1/3 para os botões de categorias -->
      <div class="col-md-4">
        <h2>Categorias</h2>
        <div class="list-group">
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria1">Categoria 1</button>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Categoria 2</button>
          <!-- Adicione mais botões conforme necessário -->
        </div>
      </div>
      <!-- 2/3 para exibir os arquivos -->
      <div class="col-md-8">
        <div id="conteudo"></div> <!-- Aqui será carregado o conteúdo dos arquivos -->
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Carregar o conteúdo dos arquivos ao clicar nos botões de categoria
      $('.list-group-item').click(function() {
        var categoria = $(this).data('category');
        $('#conteudo').load('arquivos.php?categoria=' + categoria);
      });
    });
  </script>