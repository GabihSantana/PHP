<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pags.css">
    <title>Exibir Cliente</title>

    <?php
        include_once "../factory/sessao.php";
    ?>

</head>
<body>
    <div class="voltar">
        <a href="../view/telamenu.php" class="btnvoltar"><img src="../img/voltar.png" alt=""></a>
    </div>
    
    <h1>Lista de Clientes</h1>

    <?php
        include_once '../factory/conexao.php';

        $consultar = "SELECT * FROM tbcliente";

        $executar = mysqli_query($conn, $consultar); //recebe todos os dados da tabela cliente

        while($linha = mysqli_fetch_array($executar)){ //mysqli_fetch_array organiza na memória do php em colunas codigo | nome | email
    ?>
    
    <div class="content">
        <form action="">
            Nome:
                <input type="text" name="txtnome" value="<?php echo $linha['nome']; ?>"/>
                <br />
            E-mail:
                <input type="text" name="txtemail" value="<?php echo $linha['email']; ?>" />

                <a class="delete" href="excluircliente.php?id=<?php echo $linha['cod']; ?>">X</a>
                
                <br />
                <br />
        </form>
    </div>
   
<?php
        } //fecha o while
?>

</body>
</html>