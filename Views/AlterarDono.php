<!-- 
    Pagina destinada a alteração de Donos;
-->
<?php require('../head.php') ?>
<?php require('../nav.php') ?>
<!--Inicio do nosso formulario -->
<main>
  <div class="container">
    <h1>Alterar Dono Por CPF</h1>
    <form action="../Controllers/C_alterarDono.php" method="POST">
      CPF: <input type="text" placeholder="Somente Numeros" name="CPF" minlength="11" maxlength="11">
      <br><br>
      <input type="hidden" name="acao" value="alterar" />
      <input type="submit" value="Buscar" name="cadastrar" />
    </form>

  </div>
</main>

<?php require('../footer.php') ?>