<?php
  include_once "../funcio/cabecalho.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h4>Login Clientes</h4>
            <form action="ba_login_cliente.php" method="POST">
                <label>Usuário
                    <input type="text" name="txtusuario" required>
                </label>
                <label>Senha
                    <input type="password" name="txtsenha" maxlength="6" required>
                </label>
                <br>
                <input type="submit" class="btn blue" value="Confirmar" name="btnEnvio">
                <input type="reset" class="btn pink" value="Limpar">
                <br><br><br>
                <a href="form_cad_clientes.php" class='waves-effect waves-light btn'>Novo? Cadastre-se!</a>
            </form>
        </div>
    </div>
   
</body>
</html>

<?php
    $usuario = isset($_POST["txtusuario"])? $_POST["txtusuario"] : null;
    $senha = isset($_POST["txtsenha"])?  $_POST["txtsenha"] : null;
?>