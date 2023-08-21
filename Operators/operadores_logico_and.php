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
      <h1>Operadores aritmêticos</h1>
      <br /><br />
      <form action="" method="get">
         <label>
            Média =
            <input type="number" name="txtmedia" id="input1" min = "0" max = "10" required>
         </label>
         <br><br>
         <label>
            Faltas =
            <input type="number" name="txtfaltas" id="input2" min = "0" max = "100" required>
         </label>
         <br /><br />
         <p>
            <input type="submit" name="btnVerificar" id = "verificar" value="Verificar"></input>
            <input type="reset" id = "limpar" value="Limpar">
         </p>
      </form>
      <?php
         $media = 0;
         $faltas = 0;

         if(isset ($_GET['txtmedia'], $_GET ['txtfaltas'], $_GET['btnVerificar'])){
            $media = $_GET['txtmedia'];
            $faltas = $_GET['txtfaltas']; 
         }
            echo "<h3>Situação do aluno: </h3>";
            echo "<strong>Média</strong> = $media <br>";
            echo "<strong>Faltas</strong> = $faltas <br>";

            $frequencia = ((100 - $faltas) / 100) * 100; 
            echo "<strong>Frequência</strong> = $frequencia %";
            echo "<br>Situação: ", (($media >= 6.0 && $frequencia >= 75) ? '<strong>Aprovado</strong>' : (($media < 6.0 && $media >= 4.0) && ($frequencia >= 75) ? '<strong>Exame<strong/>' : '<strong>Reprovado</strong>'));
      ?>
   </div> 

</body>

</html>