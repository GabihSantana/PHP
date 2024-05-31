<?php
    include_once "../factory/sessao.php";

    if($_POST['txtproduto'] != ""){
        include_once "../factory/conexao.php";

        $produto = $_POST['txtproduto'];
        $data = $_POST['txtdatavalidade'];
        $quantidade = $_POST['numquantidade'];
        $valor = $_POST['txtvalor'];

        $sql = "INSERT INTO tbproduto(produto, datavalidade, qtde, valor) 
            values('$produto', '$data', '$quantidade', '$valor')";

        $query = mysqli_query($conn, $sql);

        echo "
            <script> 
                alert('Dados cadastrados com sucesso!');
                window.location.href = '../view/telamenu.php';
            </script>
        ";

    }
    else{
        echo "Não foi possivel cadastrar";
    }

?>