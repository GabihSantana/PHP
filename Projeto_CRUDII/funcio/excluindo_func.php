<?php

require_once "config_func.php"; 
include_once "cabecalho.php"; 

$codigo = $_GET['id']; 

$excluir = $conexao->prepare('DELETE FROM tabfuncionarios WHERE funId = :code');
$excluir->bindValue(':code', $codigo);
$excluir->execute();

header('Location: lista_de_funcionarios.php')

?>