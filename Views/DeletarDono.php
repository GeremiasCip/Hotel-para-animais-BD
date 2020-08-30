<!-- 
    Pagina destinada a exclusão de donos;
-->
<?php require('../head.php') ?>
<?php require('../nav.php') ?>

<main>
  <div class="container">

    <!--Inicio do nosso formulario -->
    <h1>Excluir Dono Por CPF</h1>
    <form action="../Controllers/C_excluirDono.php" method="POST">
      CPF: <input type="text" placeholder="Somente Numeros" name="CPF" minlength="11" maxlength="11">
      <br><br>
      <input type="hidden" name="acao" value="deletar" />
      <input type="submit" value="Buscar" name="cadastrar" />
    </form>
  </div>
</main>

<?php require('../footer.php') ?>