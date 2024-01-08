<?php

require_once "config.php";
include_once "cabeçalho.html";

$codigo = $_POST['txtid'];
$nome = $_POST['txtnome'];
$fone = $_POST['txtfone'];
$data = $_POST['txtdatanasc'];

echo "<h3>Alterando Dados do Cliente</h3>";
echo "<h5>Cliente = $codigo</h5>";

//alterano a instrução SQL paa alteação do registro 
$altera = $conexao->prepare('UPDATE tabclientes SET cliNome=:nome, cliTelefone=:fone, cliDataNasc=:nasc WHERE cliId=:cod');

$altera->bindValue(':cod', $codigo);
$altera->bindValue(':nome', $nome);
$altera->bindValue(':fone', $fone);
$altera->bindValue(':nasc', $data);
$altera->execute();

echo "<div class='card'><br>";
echo "<b>Nome          = </b>$nome<br>
      <b>Telefone      = </b>$fone<br>
      <b>Data Nasc.    = </b>$data<br>";
echo "</div>";

echo "<a href='listar_clientes.php' class='btn'>Listagem de Clientes</a>";

//include_once "rodape.php";

?>