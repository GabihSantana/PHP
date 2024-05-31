<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pags.css">
    <title>Cliente Pesquisado</title>
</head>
<body>
    <h1>Resultado da busca: </h1>
    <?php
        include_once "../factory/sessao.php";
        include_once '../factory/conexao.php';

        $nomepesquisa = $_POST['txtpesquisarcliente'];

        $consultar = "SELECT * FROM tbcliente WHERE nome= '$nomepesquisa'";

        $executar = mysqli_query($conn, $consultar); //recebe os dados da tabela cliente

        $linha = mysqli_fetch_array($executar);
    ?>

    <div class="cadastro">
        <form action="">
            Nome:
                <input type="text" name="txtnome" class="cxbusca" disabled value="<?php echo $linha['nome']; ?>"/>
                <br />
            E-mail:
                <input type="text" name="txtemail" class="cxbusca" disabled value="<?php echo $linha['email']; ?>" /><br />
                <br />

            <a href="../view/telamenu.php" class="botao">Voltar</a>
        </form>
    </div>

</body>
</html>