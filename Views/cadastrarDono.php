<!-- 
    Pagina destinada ao cadastro de donos;
-->
<?php require('../head.php') ?>
<?php require('../nav.php') ?>
<!--Inicio do nosso formulario -->

<main>
  <div class="container">
    <h1>Formulário de cadastro para Donos</h1>
    <p><span class="error"> * Campos obrigatórios</span></p>
    <form action="../Controllers/C_cadastrarDono.php" method="POST">
      <!--$_SERVER["PHP_SELF"] é uma variável super global  -->
      CPF: <input type="number" placeholder="Entre com seu CPF (somente números)" name="CPF" minlength="11" maxlength="11" autofocus>
      <span class="error">*</span>
      <br><br>
      Nome: <input type="text" placeholder="Entre com seu nome" name="nome">
      <span class="error">*</span>
      <br><br>
      Telefone: <input type="text" placeholder="Entre com seu telefone" name="telefone">
      <span class="error">*</span>
      <br><br>
      E-mail: <input type="email" placeholder="Entre com seu e-mail" name="email">
      <span class="error">*</span>
      <br><br>
      Nascimento: <input type="date" name="data_nascimento">
      <span class="error">*</span>
      <br><br>
      Rua: <input type="text" placeholder="Entre com a rua" name="rua">
      <span class="error">*</span>
      <br><br>
      Numero: <input type="text" placeholder="Entre com o Numero da residência" name="numero">
      <span class="error">*</span>
      <br><br>
      Bairro: <input type="text" placeholder="Entre com o Bairro" name="bairro">
      <span class="error">*</span>
      <br><br>
      Complemento: <input type="text" placeholder="Entre com o Complemento" name="complemento">
      <span class="error">*</span>
      <br><br>
      Cidade: <input type="text" placeholder="Entre com a Cidade" name="cidade">
      <span class="error">*</span>
      <br><br>
      Estado: <input type="text" placeholder="Entre com o Estado" name="estado">
      <span class="error">*</span>
      <br><br>
      CEP: <input type="text" placeholder="Entre com o CEP" name="cep">
      <span class="error">*</span>
      <br><br>
      Senha: <input type="password" placeholder="**********" name="senha">
      <span class="error">*</span>
      <br><br>
      <input type="hidden" value="inserir" />
      <input type="submit" value="Cadastrar" name="cadastrar" />
    </form>
    <br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a>

  </div>
</main>
<?php require('../footer.php') ?>