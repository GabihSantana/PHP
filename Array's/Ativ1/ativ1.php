<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/Css.css" />
    <title>Exercício 01</title>
</head>
<body>
    <form action="">
        <label>
            Insira um número:
            <input type="number" name="inpNum" required>
        </label>
        <p>
            <input type="submit" id="btn" value="Enviar">
        </p>
    </form>

    <div class="Resultado">
        <?php
            $quantidade = isset($_GET['inpNum'])? $_GET['inpNum'] : 0;
            $vetor = array();
            $imp = 0;
            $par = 0;

            for($i = 0; $i < $quantidade; $i++){
                $valor = random_int(1,10);
                $vetor[] = $valor;
            }

            echo "<h2>Vetor com $quantidade números: </h2>";
            echo "<h3>";
            foreach($vetor as $value){
                echo $value . " | ";

                if($value % 2 != 0){
                $imp++;
                }
                else{
                    $par++;
                }
            }
            echo "</h3>";
            echo "<h3>Quantidade de números pares: $par</h3>";
            echo "<h3>Quantidade de números ímpares: $imp</h3>";

        ?>
    </div>
</body>
</html>