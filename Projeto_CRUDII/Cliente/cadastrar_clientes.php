<?php

require_once 'config.php';

if(isset ($_POST['btncadastrar'])) {
    $nome = filter_input(INPUT_POST,'txtnome');
    $fone = filter_input(INPUT_POST,'txtfone');
    $data = filter_input(INPUT_POST,'txtdatanasc');
    $usuario = filter_input(INPUT_POST,'txtusuario');
    $senha = filter_input(INPUT_POST,'txtsenha');

    $sql = $conexao->prepare("INSERT into tabclientes (cliNome, cliTelefone, cliDataNasc, cliUsuario, cliSenha) VALUES (:nome, :fone, :date, :usuario, :senha)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':fone', $fone);
    $sql->bindValue(':date', $data);
    $sql->bindValue(':usuario', $usuario);
    $sql->bindValue(':senha', $senha);

    $sql->execute();
    header('Location: ../funcio/Inicio.php');
}

echo "$nome $fone $data $usuario $senha";
?>