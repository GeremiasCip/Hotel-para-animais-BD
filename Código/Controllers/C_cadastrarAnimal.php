<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Animal.php';
include_once '../Persistence/AnimalDAO.php';

$nomeAnimal = $_POST['nomeAnimal'];
$anoNascimento =  $_POST['anoNascimento'];
$observacoes = $_POST['observacoes'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$f = new Animal($nomeAnimal, $anoNascimento, $observacoes, $especie, $raca);
 
$animaldao = new AnimalDAO();
$animaldao->SalvarAnimal($f, $conexao);

?>