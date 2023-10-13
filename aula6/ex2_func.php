<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <!--Entrar com um número e informar se ele é 
divisível por 10, por 5, por 2 ou se não é 
divisível por nenhum deste-->

   <form method="get" action="">
      <label>
         Número 1:
         <input type="number" name="txtV1" required>
      </label>
      <input type="submit" name="btnVerificar" value="Verificar">
   </form>
   <?php
        $num = isset($_GET['txtV1']) ? $_GET['txtV1'] : 0;
        echo "<h3>Função com parametro</h3>";

        function verificarDivisibilidade($num1){
            if($num1 % 2 === 0){
                echo $num1 . " é divisível por 2 <br>";
            }
            if($num1 % 5 === 0){
                echo $num1." é divisível por 5 <br>";
             }
            if ($num1 % 10 === 0) {
                echo $num1 . " é divisível por 10 <br>";
             }
            elseif($num1 % 2 !== 0 && $num1 % 5 !== 0 && $num1 % 10 !== 0) {
                echo "$num1 não é divisível por nenhum";
            }
        }

      verificarDivisibilidade($num);

?>

</body>
</html>