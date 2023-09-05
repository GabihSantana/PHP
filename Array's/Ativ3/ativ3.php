<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/Estilo.css" />
    <title>Exercício 03</title>
</head>
<body>
    <div class="Conteudo">
        <?php
            $valores = array();
            $numeros = 10;

            for($i = 0; $i < $numeros; $i++){
                $num = random_int(1,100);
                $valores[] = $num;
            }
            echo ("<h3>Array original: </h3>");
            foreach($valores as $values){
                echo $values . " | ";
            }
            //echo "<br>";
            //print_r($valores);
            asort($valores);
            echo ("<h3>Array em ordem crescente: </h3>");
            foreach($valores as $values){
                echo $values . " | ";
            }
            //echo "<br>";
            //print_r($valores);
            rsort($valores);
            echo ("<h3>Array em ordem decrescente: </h3>");
            foreach($valores as $values){
                echo $values . " | ";
            }
            //echo "<br>";
            //print_r($valores);
        ?>
    </div>
</body>
</html>