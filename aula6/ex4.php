<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
   <form method="get" action="ex4.php">
      <label>
         Número 1:
         <input type="number" name="inpNum1" required>
      </label>
      <label>
         Número 2:
         <input type="number" name="inpNum3" required>
      </label>
      <label>
         Número 3:
         <input type="number" name="inpNum2" required>
      </label>
      <input type="submit" name="btnVerificar" value="Verificar">
   </form>

   <?php
        $numero1 = isset($_GET['inpNum1'])? $_GET['inpNum1'] : 0;
        $numero2 = isset($_GET['inpNum2'])? $_GET['inpNum2'] : 0;
        $numero3 = isset($_GET['inpNum3'])? $_GET['inpNum3'] : 0;

        function somar($n1, $n2, $n3){
            global $soma;
            $soma = $n1 + $n2 + $n3;

            return $soma;
        }
        somar($numero1, $numero2, $numero3);
        echo "O resultado da soma dos números é: {$soma} <br>";

        function media($soma){
            global $media;
            $media = $soma / 3;
            echo "A média é {$media} <br>";
        }
        media($soma);

   ?>
</body>
</html>