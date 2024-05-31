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

    <h1>Cadastrar Produto</h1>
    <div class="cadastro">
        <form action="../model/inserirproduto.php" method="POST">

            Produto:
            <input type="text" class="txtInfo" name="txtproduto" /><br />
            Data de validade:
            <input type="date" class="txtInfo" name="txtdatavalidade" /> <br />
            Quantidade:
            <input type="number" class="txtInfo" name="numquantidade" /> <br />
            Valor:
            <input type="text" class="txtInfo" name="txtvalor" /> <br />

            <input type="submit" class="botao" name="btnenviar" value="Gravar" />

        </form>
        <br />

        <a href="../model/listarproduto.php">
            Listar Produtos
        </a>
        <br />

    </div>

</body>
</html>