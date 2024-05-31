<?php 
    include_once "../factory/sessao.php";

    if($_POST['txtnome'] != "")
    {
        include_once "../factory/conexao.php";

        $nome = $_POST['txtnome'];
        $email = $_POST['txtemail'];
        
        $sql = "INSERT INTO tbcliente(nome, email) 
                values('$nome', '$email')";

        $query = mysqli_query($conn, $sql);

        echo "
            <script> 
                alert('Dados cadastrados com sucesso!');
                window.location.href = '../view/telamenu.php';
            </script>
        ";

    }
    else
    {
        echo "Dados não cadastrados";
    }
?>