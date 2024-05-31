<?php
    include_once('LogincomLoop.php');

    $informacoes = $_POST['cxuser'] != NULL && $_POST['cxsenha'] != NULL && $_POST['cxperfil'] != NULL;

    if($informacoes){
        $usuario = $_POST['cxuser'];
        $senha = $_POST['cxsenha'];
        $perfil = $_POST['cxperfil'];

        $login = new LoginEncaps;
        $login->credenciais($usuario, $senha, $perfil);
    }
    else{
        header('Location: ../view/telalogin.php');
    }

?>