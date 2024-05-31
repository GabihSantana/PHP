<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginmenu.css">
    <title>Acessar o Sistema</title>

</head>
<body>

    <h1 class="titulologin">Acesso ao Sistema</h1>

    <form action="open.php" method="POST">

    <fieldset id="cxlogin">
        <legend>Sistema de Cadastro</legend>

        <div class="caixas">
            <label>Login:
            <input type="email" name="cxemail" class="txtinfo" /></label>
            <br />
            <label>Senha:
            <input type="password" name="cxsenha" class="txtinfo"/></label>
            <br />
            <input type="submit" value="Acessar" class="submit" />
        </div>

        <figure class="cadeado">
            <img class="figura1" src="../img/security.png" />
        </figure>

    </fieldset>
    </form>

</body>
</html>