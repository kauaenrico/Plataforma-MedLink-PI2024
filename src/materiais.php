<div class="container">
    <div class="row">
      <!-- 1/3 para os botões de categorias -->
      <div class="col-md-4">
        <br><h2>Materiais para Download</h2><br>
        <div class="list-group">
          <a href= "&mat=pdashboard"><button type="button" class="list-group-item list-group-item-action" data-category="categoria1">Tratamento ABA</button></a>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento A</button>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento B</button>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento C</button>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento D</button>
          <button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento E</button>
          <!-- Adicione mais botões conforme necessário -->
        </div>
      </div>
      <!-- 2/3 para exibir os arquivos -->
      <div class="col-md-8">
        <div id="conteudo"></div> <!-- Aqui será carregado o conteúdo dos arquivos -->
        <?php
    if(isset($_GET["mat"])){
        switch($_GET["mat"]){
            case "pdashboard":      include "dashboard.php";        break;
            case "plistaprofiss":   include "listaProfi.php";       break;
            case "plistapaciente":  include "listaPaci.php";        break;     
            default:                include "error404.php";         break;
        }
    }
?>
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