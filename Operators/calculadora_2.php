<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="estilo/CSS2.css" />

   <title>Calculadora - Tipos Numéricos/Operadores </title>
</head>

<body>
   <div class = "container">
      <h1>Calculadora</h1>
      <br /><br />
      <form action="">
         <label>
            Número 01 =
            <input type="number" name="txtnum1" id = "input1" required>
         </label>
         <br><br>
         <label>
            Número 02 =
            <input type="number" name="txtnum2" id = "input2" required>
         </label>
         <br /><br />
         <p>
            <input type="submit" name="btnSoma" id = "verificar" value="+"></input>
            <input type="submit" name="btnSubtrai" id = "verificar" value="-"></input>
            <input type="submit" name="btnMultiplica" id = "verificar" value="x"></input>
            <input type="submit" name="btnDivide" id = "verificar" value="/"></input>
            <input type="submit" name="btnResto" id = "verificar" value="%"></input>
            <br /><br /><br />
            <input type="reset" id = "limpar" value="Limpar">
         </p>
         <br />
      </form>
      <?php
         $nr1 = 0;
         $nr2 = 0;

         echo "<h3>Resultado: </h3>";
         if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET['btnSoma'])){
            $nr1 = $_GET['txtnum1'];
            $nr2 = $_GET['txtnum2'];
            echo "<strong>Soma:</strong> $nr1 + $nr2 = ", ($nr1 + $nr2);
         }

         else 
            if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET['btnSubtrai'])){
               $nr1 = $_GET['txtnum1'];
               $nr2 = $_GET['txtnum2'];
               echo "<strong>Subtração:</strong> $nr1 - $nr2 = ", ($nr1 - $nr2);
            }

         else 
            if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET     ['btnMultiplica'])){
               $nr1 = $_GET['txtnum1'];
               $nr2 = $_GET['txtnum2'];
               echo "<strong>Multiplicação:</strong> $nr1 * $nr2 = ", ($nr1 * $nr2);
            }
         else
            if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET['btnDivide'])){
               $nr1 = $_GET['txtnum1'];
               $nr2 = $_GET['txtnum2'];
               if($nr2 == 0){
                  echo "<strong>ERRO!</strong> - Valor de divisão inválido!";
               }
               else
                  echo "<strong>Divisão:</strong> $nr1 / $nr2 = ", ($nr1 / $nr2);
            }
         else
            if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET['btnResto'])){
               $nr1 = $_GET['txtnum1'];
               $nr2 = $_GET['txtnum2'];
               if($nr2 == 0){
                  echo "<strong>ERRO!</strong> - Valor de divisão inválido!";
               }
               else
                  echo "<strong>Resto da divisão:</strong> $nr1 % $nr2 = ", ($nr1 % $nr2);
            }
      ?>
   </div>

</body>

</html>