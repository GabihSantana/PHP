<?php
    require_once "config.php";  
    include_once "cabeçalho.html"; 
    
    $id = $_GET['id'];
    $consulta = $conexao->prepare('SELECT * FROM tabclientes WHERE cliId = :code');
    $consulta->bindValue(':code', $id);
    $consulta->execute();
    
    $linha = $consulta->fetch (PDO::FETCH_ASSOC); //armazena o registro selecionado

    $codigo = $id;
    $nome = $linha['cliNome'];
    $fone = $linha['cliTelefone'];
    $data = $linha['cliDataNasc'];


    echo "<div class='row'><br>";
    echo "<div class='col s12 m6 push-m3'>";
    echo "<h2>Excluir cliente?</h2>";
    echo "<b>Código      = </b>$codigo<br>
        <b>Nome          = </b>$nome<br>
        <b>Telefone      = </b>$fone<br>
        <b>Data Nasc.    = </b>$data<br>";

    echo "<a href='listar_clientes.php' class='btn'>Listagem de Clientes</a>";
    echo "<a href='excluir_clientes_action.php?id=$codigo' class='btn red'>Sim, excluir registro.</a>";
    echo "</div></div></div>";
?>