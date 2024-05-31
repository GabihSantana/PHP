<?php
    include_once "../factory/sessao.php";
    include_once "../factory/conexao.php";

    $cod = $_GET["id"];
    $excluir = "DELETE FROM tbproduto WHERE cod='$cod'";

    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
            alert('Produto excluído com sucesso!');
            window.location.href = 'listarproduto.php';
        </script>";
    }else{
        echo "<script>alert('Dados não encontrados!');</script>";
    }

?>