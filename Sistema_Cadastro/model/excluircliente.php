<?php

    include_once "../factory/sessao.php";


    include_once "../factory/conexao.php";

    $cod = $_GET["id"];
    $excluir = "DELETE FROM tbcliente WHERE cod='$cod'";

    $executar = mysqli_query($conn, $excluir);

    if($executar){
        echo "<script>
            alert('Cliente excluído com sucesso!');
            window.location.href = 'listarcliente.php';
        </script>";
    }else{
        echo "<script>alert('Dados não encontrados!');</script>";
    }

?>