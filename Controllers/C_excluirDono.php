<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/DonoDAO.php';

//variavel para pegar valor do cpf
$cpf =  $_POST['CPF'];


//conexao com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//nova instancia do dono
$donodao = new DonoDAO();
$res = $donodao->ConsultarDono($cpf, $conexao);


if ($res->num_rows > 0) {
    $registro = $res->fetch_assoc();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Consultar e Deletar</title></head>
<body><h1>Consultar e deletar</h1>
<form action='../Controllers/C_excluirDonoDefinitivo.php' method='POST''>
    CPF: <input type='text' name='CPF' value='" . $registro['CPF'] ."' readonly=“true”><br><br>
    Nome: <input type='text' name='nome' value='" . $registro['nome'] . "'><br><br>
    Telefone: <input type='text'  name='telefone' value='" . $registro['telefone'] . "'> <br><br>
    E-mail: <input type='text'  name='email' value='" . $registro['email'] . "'> <br><br>
    Nascimento: <input type='date'  name='data_nascimento' value='" . $registro['data_nascimento'] . "'> <br><br>
    Rua: <input type='text'  name='rua' value='" . $registro['rua'] . "'> <br><br>
    Numero: <input type='text'  name='numero' value='" . $registro['numero'] . "'> <br><br>
    Bairro: <input type='text'  name='bairro' value='" . $registro['bairro'] . "'> <br><br>
    Complemento: <input type='text'  name='complemento' value='" . $registro['complemento'] . "'> <br><br>
    Cidade: <input type='text'  name='cidade' value='" . $registro['cidade'] . "'> <br><br>
    Estado: <input type='text'  name='estado' value='" . $registro['estado'] . "'> <br><br>
    CEP: <input type='text'  name='cep' value='" . $registro['cep'] . "'> <br><br>

        <input type='hidden' value='inserir'/>
        <input type='submit' value='Deletar' name='cadastrar'/>
</form>
<a href='../index.html'>Voltar Para o Menu Principal</a>
</body>
</html>";

}else {
    echo "<script> alert('Nenhum dono encontrado!');document.location='../index.html'</script>";
}

?>