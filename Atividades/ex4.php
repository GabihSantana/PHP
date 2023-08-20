<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/CSS.css" />

    <title>IMC</title>
</head>
<body>
    <div class = "resultado">
        <?php

        $weight = $_GET["inpWeight"];
        $height = $_GET["inpHeight"];
        $imc = $weight / ($height ** 2);

        echo "O seu IMC é " . number_format($imc, 2);
        echo "<br>";
        echo "Você foi classificado como: ";

        if($imc < 18.5)
        {
            echo "<h3>Magreza</h3>";
        }
        else if($imc < 25) {
            echo "<h3>Saudável!</h3>";
        }
        else if($imc < 30) {
            echo "<h3>Sobrepeso</h3>";
        }
        else if($imc < 35) {
            echo "<h3>Obesidade Grau I</h3>";
        }
        else if($imc < 40) {
            echo "<h3>Obesidade Grau II (Severa)</h3>";
        }
        else {
        echo "<h3>Obesidade Grau III (Mórbida)</h3>";
        }
        ?>
    </div> 
</body>
</html>

