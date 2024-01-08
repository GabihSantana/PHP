<?php
    include_once "cabecalho.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ações</title>
</head>
<body>
    <div class="Opções" style="display: grid; margin: auto; width: 50%;">
        <h3 class="center-align">Clientes</h3>
        <a class="waves-effect waves-light btn-large" href="../Cliente/listar_clientes.php"><i class="material-icons left">assignment</i>Listar Clientes</a>
        <br>
        <h3 class="center-align">Funcionarios</h3>
        <a class="waves-effect waves-light btn-large blue" href="lista_de_funcionarios.php"><i class="material-icons left">assignment</i>Listar Funcionários</a>
        <br>
        <h3 class="center-align">Produtos</h3>
        <a class="waves-effect waves-light btn-large orange" href="cadastrar_produto.php"><i class="material-icons left">assignment</i>Cadastrar Novo produto</a>
        <br><br>
    </div>
</body>
</html>