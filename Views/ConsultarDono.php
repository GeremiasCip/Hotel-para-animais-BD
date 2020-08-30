<!-- 
    Pagina destinada a consulta de donos;
-->
<?php require('../head.php') ?>
<?php require('../nav.php') ?>
<!--Inicio do nosso formulario -->
<main>
  <div class="container">
    <h1>Consultar Dono</h1>
    <form action="../Controllers/C_consultarDonos.php" method="POST">
      CPF: <input type="text" placeholder="Somente Numeros" name="CPF" minlength="11" maxlength="11">
      <br><br>
      <input type="hidden" name="acao" value="inserir" />
      <input type="submit" value="Consultar" name="cadastrar" />
    </form>

  </div>
</main>

<?php require('../footer.php') ?>