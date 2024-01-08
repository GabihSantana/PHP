<?php
    require_once "config_func.php";

    if(isset ($_POST['btncadProd'])) {
        $Codigo = filter_input(INPUT_POST,'txtcodPro');
        $Descricao = filter_input(INPUT_POST,'txtproDescri');
        $Imagem = filter_input(INPUT_POST,'txtproImagem');
        $Valor = filter_input(INPUT_POST,'txtproValor');
    
        $sql = $conexao->prepare("INSERT into tabprodutos (proId, proDescricao, proImagem, proPreco) VALUES (:codigo, :descricao, :imagem, :valor)");
        $sql->bindValue(':codigo', $Codigo);
        $sql->bindValue(':descricao', $Descricao);
        $sql->bindValue(':imagem', $Imagem);
        $sql->bindValue(':valor', $Valor);
        $sql->execute();
        header('Location:lista_produtos.php');
    }
    
    echo "$Codigo, $Descricao, $Imagem, $Valor";

?>