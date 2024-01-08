<?php

    require_once 'config_func.php';

    if(isset ($_POST['btncadastrar'])) {
        $Nome = filter_input(INPUT_POST,'txtnome');
        $Senha = filter_input(INPUT_POST,'txtsenha');
        $Email = filter_input(INPUT_POST,'txtemail');
        $Cargo = filter_input(INPUT_POST,'txtcargo');
        $Usuario = filter_input(INPUT_POST,'txtusuario');
        $Foto = filter_input(INPUT_POST,'txtfoto');
    
        $sql = $conexao->prepare("INSERT into tabfuncionarios (funNome, funSenha, funEmail, funCargo, funUsuario, funFoto) VALUES (:nome, :senha, :email, :cargo, :usuario, :foto)");
        $sql->bindValue(':nome', $Nome);
        $sql->bindValue(':senha', $Senha);
        $sql->bindValue(':email', $Email);
        $sql->bindValue(':cargo', $Cargo);
        $sql->bindValue(':usuario', $Usuario);
        $sql->bindValue(':foto', $Foto);
        $sql->execute();
        header('Location:lista_de_funcionarios.php');
    }
    
    echo "$Nome, $Senha, $Email, $Cargo, $Usuario, $Foto";

?>