<?php
    include_once "../factory/conexao.php";
    session_start();

    $login = $_POST["cxemail"];
    $senha = $_POST["cxsenha"];

    $sql = "SELECT * FROM tbusuario WHERE email = '$login' AND senha = '$senha' ";
    $result = mysqli_query($conn, $sql);

    // mysqli_num_rows -> se recebeu algum número do $result = mysqli_query($conn, $sql); vai executar o if
    if(mysqli_num_rows($result) > 0){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;

        echo "
            <script> 
                alert('Seja bem vindo!');
                window.location.href = 'telamenu.php';
            </script>
        ";

    }else{

        //unset -> destroi as variaveis session
        unset($_SESSION['login']);
        unset($_SESSION['senha']);

        echo "
        <script> 
            alert('Usuário e senha inválido!');
            window.location.href = 'telalogin.php';
        </script>
    ";

    }

?>