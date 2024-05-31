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

    <h1>Buscar Cliente por Nome</h1>

    <div class="cadastro">
        <form action="../model/pesquisanomecliente.php" method="POST">
            Digite o nome completo: <br />
                <input type="text" class="cxbusca" name="txtpesquisarcliente" />
                <input type="submit" class="botao" name="btnpesquisar" value="Buscar" />
        </form>  
        <br />   
    </div>

</body>
</html>