<?php
    require_once 'config.php';
    session_start();

    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }

    if($_SESSION['tentativas'] == 3){
        $_SESSION['tentativas'] = 0;
        header("Location: form_cad_clientes.php");
        exit;
    }

    $verificacao = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($verificacao['btnEnvio'])){
        $usuario = $verificacao['txtusuario'];
        $senha = $verificacao['txtsenha'];

        $sql = "SELECT * FROM tabclientes WHERE cliUsuario = :Usuario AND cliSenha = :Senha";

        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':Usuario', $usuario);
        $consulta->bindParam(':Senha', $senha);
        $consulta->execute();

        if($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($registro);
            header("Location: ../funcio/Inicio.php");
            exit;
        }
        else{
            $_SESSION['tentativas'] += 1; 
            header("Location: login_cliente.php");
            exit;
        }
    }

?>