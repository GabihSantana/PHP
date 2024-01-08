<?php
  include_once "../funcio/cabecalho.php";    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar cliente</title>
</head>
<body>
<div style="margin:10px;">
   <!--Formulário para pesquisa-->
    <form action="consulta_clientes.php" method="get">
        <h4>Pesquisar por:</h4>
        <input type="text" name="txtPesquisar" id="pesquisar"  placeholder="Digite o nome do cliente">
        <br><br>
        <input type="submit" name="btnPesquisar" class="btn" value="Pesquisar" id="pesquisaCliente">
        <input type="reset" name="btnLimpar" class="btn red" id="limpar" value="Limpar">
    </form>
</div>
</body>
</html>