<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pags.css">
    <title>Produto Pesquisado</title>
</head>
<body>
    <?php
        include_once "../factory/sessao.php";
        include_once '../factory/conexao.php';

        $pesqproduto = $_POST['txtpesqproduto'];

        $consultar = "SELECT * FROM tbproduto WHERE produto= '$pesqproduto'";

        $executar = mysqli_query($conn, $consultar); //recebe os dados da tabela cliente

        $linha = mysqli_fetch_array($executar);
    ?>
    <h1>Resultado da busca: </h1>
    <div class="cadastro">
        <form action="">
            Produto:
                <input type="text" name="txtproduto" class="cxbusca" disabled value="<?php echo $linha['produto']; ?>" /><br />
            Data de validade:
                <input type="date" name="txtdatavalidade" class="cxbusca" disabled value="<?php echo $linha['datavalidade']; ?>"  /> <br />
            Quantidade:
                <input type="number" name="numquantidade" class="cxbusca" disabled value="<?php echo $linha['qtde']; ?>"  /> <br />
            Valor:
                <input type="text" name="txtvalor" class="cxbusca" disabled value="<?php echo $linha['valor']; ?>"  /> <br />
            <br />

            <a href="../view/telamenu.php" class="botao">Voltar</a>
        </form>
    </div>

</body>
</html>