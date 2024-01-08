<?php
    require_once 'config_func.php';
    session_start();

    if (!isset($_SESSION['tentativas'])) {
        $_SESSION['tentativas'] = 0;
    }

    if($_SESSION['tentativas'] == 3){
        $_SESSION['tentativas'] = 0;
        header("Location: form_cad_func.php");
        exit;
    }

    $verificacao = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($verificacao['btnEnvio'])){
        $usuario = $verificacao['txtusuario'];
        $senha = $verificacao['txtsenha'];

        $sql = "SELECT * FROM tabfuncionarios WHERE funUsuario = :Usuario AND funSenha = :Senha";

        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':Usuario', $usuario);
        $consulta->bindParam(':Senha', $senha);
        $consulta->execute();

        if($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($registro);
            header("Location: acoes.php");
            exit;
            //echo "Usuário: $usuario <br>";
            //echo "Senha: $senha <br>";
        }
        else{
            $_SESSION['tentativas'] += 1; 
            header("Location: login.php");
            exit;
            //echo "a " . $_SESSION['tentativas'];
        }
    }

?>