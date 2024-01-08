<?php

require_once "config_func.php";
include_once "cabecalho.php";

$codigo = $_POST['txtid'];
$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$cargo = $_POST['txtcargo'];
$usuario = $_POST['txtusuario'];
$foto = $_POST['txtfoto'];


echo "<h3>Alterando Funcionário</h3>";
echo "<h5>Funcionario = $codigo</h5>";

$altera = $conexao->prepare('UPDATE tabfuncionarios SET funNome = :nome, funEmail = :email, funCargo = :cargo, funUsuario = :usuario, funFoto = :foto WHERE funId = :cod');

$altera->bindValue(':cod', $codigo);
$altera->bindValue(':nome', $nome);
$altera->bindValue(':email', $email);
$altera->bindValue(':cargo', $cargo);
$altera->bindValue(':usuario', $usuario);
$altera->bindValue(':foto', $foto);

$altera->execute();

echo "<div class='card'><br>";
echo "<b>Nome          = </b>$nome<br>
      <b>Email         = </b>$email<br>
      <b>Cargo         = </b>$cargo<br>
      <b>Usuario       = </b>$usuario<br>
      <b>Foto          = </b>$foto<br>";
echo "</div>";

echo "<a href='lista_de_funcionarios.php' class='btn'>Listagem de Funcionários</a>";

//include_once "rodape.php";

?>