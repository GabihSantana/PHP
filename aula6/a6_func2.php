<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <form action="#" method="get">
        Nome:
        <input type="text" name="txtnome" required><br><br>
        Nota 1:
        <input type="number" min="0" max="10" name="nota1" required><br><br>
        Nota 2:
        <input type="number" min="0" max="10" name="nota2" required><br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>

    <?php
        $nome = isset($_GET['txtnome'])? $_GET['txtnome'] : "Null";
        $nota1 = isset($_GET['nota1'])? $_GET['nota1'] : 0;
        $nota2 = isset($_GET['nota2'])? $_GET['nota2'] : 0;

        function media($nota1, $nota2, $nome){
            $media = ($nota1 + $nota2) / 2;
            if($media < 7){
                echo "<h3>O aluno $nome está reprovado!</h3>";
            }else{
                echo "<h3>O aluno $nome está aprovado!</h3>";
            }
            return $media;
        }

        echo "A média do aluno foi: " . media($nota1, $nota2, $nome);
    ?>
</body>
</html>