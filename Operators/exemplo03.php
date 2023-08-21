<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="estilo/CSS.css" />

   <title>Calculadora - Tipos Numéricos/Operadores </title>
</head>

<body>
   <div class = "container">
      <h1>Operadores Relacionais</h1>
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
            <input type="submit" name="btnCalcular" id = "verificar" value="Calcular"></input>
            <input type="reset" id = "limpar" value="Limpar">
         </p>
         <br />
      </form>
      <?php
         $nr1 = 0;
         $nr2 = 0;

         if(isset ($_GET['txtnum1'], $_GET ['txtnum2'], $_GET['btnCalcular'])){
         $nr1 = $_GET['txtnum1'];
         $nr2 = $_GET['txtnum2'];
         }

         echo "Maior que (>): $nr1 > $nr2 = ",($nr1 > $nr2 ? 'true' : 'false');
         echo "<br>Menor que (<): $nr1 > $nr2 = ",($nr1 < $nr2 ? 'true' : 'false');
         echo "<br>Diferente de (<>): $nr1 <> $nr2 = ",($nr1 <> $nr2 ? 'true' : 'false');
         echo "<br>Diferente de (!=): $nr1 != $nr2 = ",($nr1 != $nr2 ? 'true' : 'false');
         echo "<br>Não Idêntico (!==): $nr1 !== $nr2 = ",($nr1 !== $nr2 ? 'true' : 'false');
         echo "<br>São iguais (==): $nr1 == $nr2 = ",($nr1 == $nr2 ? 'true' : 'false');
         echo "<br>São idênticos (===): $nr1 === $nr2 = ",($nr1 === $nr2 ? 'true' : 'false');
         echo "<br>Menor ou igual (<=): $nr1 <= $nr2 = ",($nr1 <= $nr2 ? 'true' : 'false');
         echo "<br>Maior ou igual (>=): $nr1 >= $nr2 = ",($nr1 >= $nr2 ? 'true' : 'false');

      ?>
   </div>

</body>

</html>