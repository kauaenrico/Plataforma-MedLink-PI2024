<div class="container">
    <div class="row">
      <!-- 1/3 para os botões de categorias -->
      <div class="col-md-4">
        <br><h2>Materiais para Download</h2><br>
        <p></p><br>
        <div class="list-group">
          <a href= "index.php?page=pmateriais&m=tABA"><button type="button" class="list-group-item list-group-item-action" data-category="categoria1">Tratamento ABA</button></a>
          <a href= "index.php?page=pmateriais&m=tPECS"><button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento PECS</button></a>
          <a href= "index.php?page=pmateriais&m=tTEACCH"><button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento TEACCH</button></a>
          <a href= "index.php?page=pmateriais&m=tRDI"><button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento RDI</button></a>
          <a href= "index.php?page=pmateriais&m=tCBT"><button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento CBT</button></a>
          <a href= "index.php?page=pmateriais&m=tSI"><button type="button" class="list-group-item list-group-item-action" data-category="categoria2">Tratamento SI</button></a>
          <!-- Adicione mais botões conforme necessário -->
        </div>
      </div>
      <!-- 2/3 para exibir os arquivos -->
      <div class="col-md-8">
        <div id="conteudo"></div> <!-- Aqui será carregado o conteúdo dos arquivos -->
        <?php
    if(isset($_GET["m"])){
        switch($_GET["m"]){
            case "tABA":      include "materiaisABA.php";        break;
            case "tPECS":      include "materiaisPECS.php";        break;
            case "tTEACCH":      include "materiaisTEACCH.php";        break;
            case "tRDI":      include "materiaisRDI.php";        break;
            case "tCBT":      include "materiaisCBT.php";        break;
            case "tSI":      include "materiaisSI.php";        break;  
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