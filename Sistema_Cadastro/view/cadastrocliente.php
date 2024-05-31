<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pags.css">
    <title>Cadastro Cliente</title>
    <?php
        include_once "../factory/sessao.php";
    ?>
    
</head>
<body>

    <div class="voltar">
        <a href="../view/telamenu.php" class="btnvoltar"><img src="../img/voltar.png" alt=""></a>
    </div>

    <h1>Cadastrar Cliente</h1>

    <div class="cadastro">
        <form action="../model/inserircliente.php" method="POST">

            Nome:
            <input type="text" class="txtInfo" name="txtnome" /><br /><br />
            E-mail:
            <input type="text" class="txtInfo" name="txtemail" /> <br /><br />

            <input type="submit" class="botao" name="btnenviar" value="Gravar" />
        </form>
        <br />

        <a href="../model/listarcliente.php">
            Listar Clientes
        </a>
        <br />

    </div>

</body>
</html>