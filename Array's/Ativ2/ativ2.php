<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/Estilo.css" />
    <title>Exercício 2</title>
</head>
<body>
    <div class="Conteudo">
        <?php
            $posição = 15;
            $vetor = array();
            $media = 0;

            //Posicionando os valores no vetor
            for($i = 0; $i < $posição; $i++){
                $valor = random_int(1,20);
                $vetor[] = $valor;
            }
            echo "<h3>Array Formada:</h3>";
        
            //Printando os valores e calculando a média
            echo "<h4>";
            foreach ($vetor as $value) {
                echo $value . " | ";

                $media = ($media + $value);
            }
            echo "</h4>";

            //Colocando o vetor em ordem crescente para facilitar a mediana
            sort($vetor);
            $count = count($vetor);
            $mediana = $vetor[$count / 2];
            echo "<h3>Array em ordem crescente:</h3>";
            
            echo "<h4>";
            foreach($vetor as $value){
                echo $value . " | ";
            }
            echo "</h4>";

            $media = $media / $posição;
            echo "<strong>Média = $media</strong>";

            //Calculando a moda
            $moda = null;
            $repetição = 0;
            $contarValor = array_count_values($vetor);

            foreach ($contarValor as $value => $count) {
                if ($count > $repetição) {
                    $moda = $value;
                    $repetição = $count;
                }
            }
            if ($moda !== null) {
                echo "<strong>Moda: $moda<strong>";
            } else {
                echo "Não possui moda";
            }

            //printando o resultado
            echo "<strong><br>Mediana: <strong>" . $mediana;
        ?>
    </div>
</body>
</html>