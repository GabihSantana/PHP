<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/loginmenu.css">
    <title>Menu</title>

    <?php
        include_once "../factory/sessao.php";
    ?>
   
</head>
<body>

    <div class="header">
        <?php 
            echo "<p>Perfil: " . $logado . "</p>";
            echo "<a href='sair.php'>Sair</a>";
        ?>
    </div>

    <h1>Menu Principal</h1>

    <section id="menu">
        <div class="opcoes">

            <a class="cadCli" href="cadastrocliente.php">
                <img src="../img/cadCli.png" alt="">
                Cadastrar Cliente
            </a>
            <br />

            <a class="buscaCli" href="../view/buscacliente.php">
                <img src="../img/buscaCli.png" alt="">
                Consulta por Nome
            </a>
            <br />

            <a class="listaCli" href="../model/listarcliente.php">
                <img src="../img/listaCli.png" alt="">
                Listar todos os clientes
            </a>
            <br />

            <a class="cadPro" href="cadastroproduto.php">
                <img src="../img/produto.png" alt="">
                Cadastrar Produto
            </a>
            <br />

            <a class="buscaPro" href="../view/buscaproduto.php">
                <img src="../img/buscaPro.png" alt="">
                Consulta por Produto
            </a>
            <br />

            <a class="listaPro" href="../model/listarproduto.php">
                <img src="../img/listaProd.png" alt="">
                Listar todos os produtos
            </a>

            <br>
        </div>


    </section>
    
</body>
</html>