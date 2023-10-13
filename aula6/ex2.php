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
            $moda = null;
            $media = 0;
            $mediana = 0;


            function criaArray($posição){
                $vetor = array();
                for($i = 0; $i < $posição; $i++){
                    $valor = random_int(1,20);
                    $vetor[] = $valor;
                }
                return $vetor;
            }

            $vetor = criaArray($posição);
        
            function mediaModaMediana($vetor, $moda, $media, $mediana, $posição) {
                global $moda, $media, $mediana, $posição;
                sort($vetor);
                $count = count($vetor);
                $media = array_sum($vetor) / $count; 
            
                $middle = floor(($count - 1) / 2);
                if ($count % 2 == 0) {
                    $mediana = ($vetor[$middle] + $vetor[$middle + 1]) / 2; 
                } else {
                    $mediana = $vetor[$middle]; 
                }
            
                $repetição = 0;
                $contarValor = array_count_values($vetor);
            
                foreach ($contarValor as $value => $count) {
                    if ($count > $repetição) {
                        $moda = $value;
                        $repetição = $count;
                    }
                }
            }

            mediaModaMediana($vetor, $moda, $media, $mediana, $posição);


            function imprimir($vetor, $moda, $media, $mediana) {
                echo "<h3>Array Formada:</h3>";
                echo "<h4>";
                foreach ($vetor as $value) {
                    echo $value . " | ";
                }
                echo "</h4>";
            
                echo "<h3>Array em ordem crescente:</h3>";
                echo "<h4>";
                sort($vetor);
                foreach ($vetor as $value) {
                    echo $value . " | ";
                }
                echo "</h4>";
            
                if ($moda !== null) {
                    echo "<strong>Moda: $moda</strong><br>";
                } else {
                    echo "Não possui moda<br>";
                }

                echo "<strong>Média = $media</strong><br>";
            
                echo "<strong>Mediana: <strong>" . $mediana;
            }
            
            imprimir($vetor, $moda, $media, $mediana);
            ?>       
            
    </div>
</body>
</html>