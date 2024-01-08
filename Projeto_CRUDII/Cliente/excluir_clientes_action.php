<?php

require_once "config.php"; 
include_once "cabeçalho.html"; 

$codigo = $_GET['id']; 

$excluir = $conexao->prepare('DELETE FROM tabclientes WHERE cliId = :code');
$excluir->bindValue(':code', $codigo);
$excluir->execute();

header('Location: listar_clientes.php')

?>