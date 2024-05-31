<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pags.css">
    <title>Lista de produtos</title>

    <?php
        include_once "../factory/sessao.php";
    ?>

</head>
<body>

    <div class="voltar">
        <a href="../view/telamenu.php" class="btnvoltar"><img src="../img/voltar.png" alt=""></a>
    </div>

    <h1>Lista de Produtos</h1>
    <?php
        include_once "../factory/conexao.php";

        $_consulta = "SELECT * FROM tbproduto";

        $executar = mysqli_query($conn, $_consulta);

        while($valor = mysqli_fetch_array($executar)){
        
    ?>

        <div class="content">
            <form action="">

                Produto:
                <input type="text" name="txtproduto" value="<?php echo $valor['produto']; ?>" /><br />
                Data de validade:
                <input type="date" name="txtdatavalidade" value="<?php echo $valor['datavalidade']; ?>"  /> <br />
                Quantidade:
                <input type="number" name="numquantidade" value="<?php echo $valor['qtde']; ?>"  /> <br />
                Valor:
                <input type="text" name="txtvalor" value="<?php echo $valor['valor']; ?>"  /> 

                <a class="delete" href="excluirproduto.php?id=<?php echo $valor['cod']; ?>">X</a>

                <br />
                <br />

            </form>
        </div>
    <?php
        }
    ?>

</body>
</html>