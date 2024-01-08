<?php
    include_once "cabecalho.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="css/estilos.css">
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Login page</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h4>Login Funcionários</h4>
            <form action="verificação.php" method="POST">
                <label>Usuário
                    <input type="text" name="txtusuario" required>
                </label>
                <label>Senha
                    <input type="password" name="txtsenha" maxlength="6" required>
                </label>
                <input type="submit" class="btn blue" value="Confirmar" name="btnEnvio">
                <input type="reset" class="btn pink" value="Limpar">
            </form>
        </div>
    </div>
   
</body>
</html>

<?php
    $usuario = isset($_POST["txtusuario"])? $_POST["txtusuario"] : null;
    $senha = isset($_POST["txtsenha"])?  $_POST["txtsenha"] : null;
?>