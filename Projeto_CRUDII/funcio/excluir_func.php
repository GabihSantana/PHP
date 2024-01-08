<?php
    require_once "config_func.php";  
    include_once "cabecalho.php"; 
    
    $id = $_GET['id'];
    $consulta = $conexao->prepare('SELECT * FROM tabfuncionarios WHERE funId = :code');
    $consulta->bindValue(':code', $id);
    $consulta->execute();
    
    $linha = $consulta->fetch (PDO::FETCH_ASSOC); //armazena o registro selecionado

    $codigo = $id;
    $nome = $linha['funNome'];
    $email = $linha['funEmail'];
    $cargo = $linha['funCargo'];
    $usuario = $linha['funUsuario'];
    $foto = $linha['funFoto'];


    echo "<div class='row'><br>";
    echo "<div class='col s12 m6 push-m3'>";
    echo "<h2>Excluir Funcionário?</h2>";
    echo "<b>Código      = </b>$codigo<br>
        <b>Nome          = </b>$nome<br>
        <b>Email      = </b>$email<br>
        <b>Cargo    = </b>$cargo<br>
        <b>Usuario      = </b>$usuario<br>
        <b>Foto      = </b>$foto<br>";


    echo "<a href='lista_de_funcionarios.php' class='btn'>Listagem de Funcionários</a>";
    echo "<a href='excluindo_func.php?id=$codigo' class='btn red'>Sim, excluir registro.</a>";
    echo "</div></div></div>";
?>