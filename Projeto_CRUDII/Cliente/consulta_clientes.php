<?php
    require_once 'config.php';
    include_once 'cabeçalho.html';

    echo "<h3>Consulta Clientes</h3>";

    $campos_form = filter_input_array(INPUT_GET, FILTER_DEFAULT);

    if(!empty($campos_form['btnPesquisar'])){
        $dado = "%" . $campos_form['txtPesquisar'] . "%";

        $sql = "SELECT * FROM tabclientes WHERE clinome LIKE :valor ORDER BY clinome";
        $consulta = $conexao->prepare($sql); //resultados da consulta
        $consulta->bindParam(':valor', $dado);
        $consulta->execute(); 
        //exibindo os resultados
        while($registro = $consulta->fetch(PDO::FETCH_ASSOC)){
            extract($registro);
            echo "ID: $cliId <br>";
            echo "Nome: $cliNome <br>";
            echo "Telefone: $cliTelefone <br>";
            echo "<br><hr>";
        }
    }
?>