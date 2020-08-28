<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/DonoDAO.php';

$cpf =  $_POST['CPF'];


$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$donodao = new DonoDAO();
$resultado = $donodao->ConsultarDono($cpf, $conexao);

if ($resultado->num_rows > 0) { ?>
    <html>
            <head>
            <style>
              table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
              }
              td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
              }
              tr:nth-child(even) {
                background-color: #dddddd;
              }
             </style>
             </head>
             <body>
             <table>
              <tr>
                <th>CPF</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Data de Nascimento</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>Complemento</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Cep</th>
                <th>Senha<th>
              </tr>
              <?php 
    while ($registro = $resultado->fetch_assoc() ) {
        echo "<tr>";
        echo 
             "<td>" . $registro['CPF'] . "</td>" .
             "<td>" . $registro['nome'] . "</td>" .
             "<td>" . $registro['telefone'] . "</td>". 
             "<td>" . $registro['email'] ."</td>" .
             "<td>" . $registro['data_nascimento'] . "</td>" .
             "<td>" . $registro['rua'] . "</td>".
             "<td>" . $registro['numero'] . "</td>".
             "<td>" . $registro['bairro'] . "</td>".
             "<td>" . $registro['complemento'] . "</td>".
             "<td>" . $registro['cidade'] . "</td>".
             "<td>" . $registro['estado'] . "</td>".
             "<td>" . $registro['cep'] . "</td>".
             "<td>" . $registro['senha'] . "</td>";
             
        echo "</tr>";
    }
    echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}

else {
  echo "<script> alert('Nenhum dono encontrado!');document.location='../index.html'</script>";
}

?>