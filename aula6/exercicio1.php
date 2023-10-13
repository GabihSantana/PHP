<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="#" method="get">
      Digite a quantidade de valores do array:<br>
        <input type="number" name="txtvalor" required autofocus >
        <input type="submit" value="Enviar">
    </form>

    <?php
        $quantidade = isset($_GET['txtvalor']) ? $_GET['txtvalor'] : 0;
        $vetor = vetor($quantidade); 
        $p = 0;
        $i = 0;
        $par = array();
        $impar = array();

        function vetor($quantidade){
            $vetor = array();
            for($i = 0; $i < $quantidade; $i++){
                $num = random_int(1, 10);
                $vetor[] = $num;
            }
            return $vetor;
        }

        function parImpar($vetor, $p, $i, $par, $impar){
            global $p, $i, $par, $impar;
            foreach($vetor as $num){
                if($num % 2 == 0){
                    $par[] = $num;
                    $p++;
                }else{
                    $impar[] = $num;
                    $i++;
                }
            }
        }

        parImpar($vetor, $p, $i, $par, $impar);

        function imprimir($vetor, $impar, $par, $i, $p, $quantidade){
            echo "<br>V E T O R<br>";
            echo "$quantidade valores<br>";
            foreach($vetor as $num){
                echo " " . $num;
            }
            echo "<br>";
            echo "<br>P A R E S<br>";
            echo "$p valores<br>";
            foreach($par as $num){
                echo " " . $num;
            }
            echo "<br>";
            echo "<br>I M P A R E S<br>";
            echo "$i valores<br>";
            foreach($impar as $num){
                echo " " . $num;
            }
        }
        imprimir($vetor, $impar, $par, $i, $p, $quantidade);
    ?>
</body>
</html>