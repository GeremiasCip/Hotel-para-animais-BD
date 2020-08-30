<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Dono.php';
include_once '../Persistence/DonoDAO.php';

$CPF = $_POST['CPF'];
$nome = $_POST['nome'];
$telefone =  $_POST['telefone'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$senha = $_POST['senha'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$f = new Dono($CPF, $nome, $telefone, $email, $data_nascimento,$rua, $numero, $bairro, $complemento, $cidade, $estado, $cep, $senha);
 
$donodao = new DonoDAO();
$donodao->SalvarDono($f, $conexao);

?>