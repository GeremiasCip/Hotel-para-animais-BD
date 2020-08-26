<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Reserva.php';
include_once '../Persistence/ReservaDAO.php';

$dataEntrada =  $_POST['dataEntrada'];
$dataSaida =  $_POST['dataSaida'];
$CPF =  $_POST['CPF'];
$idQuarto = $_POST['idQuarto'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$f = new Reserva($dataEntrada, $dataSaida, $CPF, $idQuarto);
 
$reservadao = new ReservaDAO();
$reservadao->SalvarReserva($f, $conexao);

?>