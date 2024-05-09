<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <!-- <img src="assets/img/PequenosPassos_Logo02-bg.png" alt="" > -->
    <!-- <li class="nav-item">
      <img src="assets/img/PequenosPassos_Logo02-bg.png" max-width=30% height=auto display=block>
    </li> -->
    <a class="navbar-brand" href="index.php?page=pdashboard">MedLink</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?page=pdashboard">Pagina Inicial<span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Paciente</a>
          <div class= "dropdown-menu">
            <a class= "dropdown-item" href= "index.php?page=pcadpaciente">Cadastrar paciente</a>
            <a class= "dropdown-item" href= "#">Lista de pacientes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Agenda</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?page=pagenda">Minha Agenda</a>
            <div>
              <a class="dropdown-item" href="index.php?page=pnovaagenda">Nova Sessão</a>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=pavisosgerais">Avisos Gerais</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=padministracao">Administração</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>