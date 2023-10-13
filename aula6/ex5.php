<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
   <form method="get" action="ex5.php">
      <label>
         Número 1:
         <input type="number" name="inpNum1" min="0" required>
      </label>
      <input type="submit" name="btnVerificar" value="Verificar">
   </form>

   <?php
        $numero1 = isset($_GET['inpNum1'])? $_GET['inpNum1'] : 0;

        function checarPrimo($n1){
            global $primos;
           $primos = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
           
           foreach($primos as $primo){
                if($n1 == $primo){
                    echo"O número {$n1} é um número primo! <br>";
                    break;
                }
           } if($n1 != $primo){
            echo "O número {$n1} não é um número primo! <br>";
        }
    }
        checarPrimo($numero1);

        function imprimePrimo($n1){
            global $primos;
            echo "Numeros primos entre 1 e {$n1}: <br>";   
            foreach($primos as $primo){
                if($primo <= $n1){
                    echo $primo . " | ";
                }
            }
        }
        imprimePrimo($numero1);


     
   ?>
</body>
</html>