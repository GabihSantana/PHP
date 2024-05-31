<?php
    session_start();

    if(isset($_GET['err'])){
        echo "<script>";
        echo "const erro = 'Credenciais Inválidas!';";
        echo "alert(erro)";
        echo "</script>";
    }

    if(isset($_GET['cadastro'])){
        echo "<script>";
        echo "const erro = 'Realize o cadastro!';";
        echo "alert(erro)";
        echo "</script>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Tela Login - PHP Orientado à Objetos</h1>
    <div class="login">
        <form action="../control/validaCred.php" method="POST">
            <fieldset id="cxlogin">
                <legend>Login</legend>
                <div class="caixas">
                    <label>Usuário:</label>
                    <input type="text" name="cxuser" class="txtinfo" />
                    <br /><br />
                    <label>Senha:</label>
                    <input type="password" name="cxsenha" class="txtinfo"/>
                    <br /><br />
                    <label>Perfil:</label>
                    <input type="text" name="cxperfil" class="txtinfo" />
                    <br /><br />
                    <input type="submit" value="Acessar" class="submit" />
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>