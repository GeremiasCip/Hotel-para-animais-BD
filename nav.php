<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Controle de dono</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/Hotel-Canino-BD/Views/cadastrarDono.php">Cadastrar Dono</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/Hotel-Canino-BD/Controllers/C_todosDonos.php">Consultar todos os Donos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/Hotel-Canino-BD/Views/DeletarDono.php">Buscar e Excluir</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/Hotel-Canino-BD/Views/AlterarDono.php">Buscar e Alterar</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" action="Controllers/C_consultarDonos.php" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar por CPF do cliente" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

</header>