<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once "../control/controlecaixa.php" ?>
</head>
<body>
    <?php
        $dado = new ControleCaixa;
        $dado->setNome("Domenico");
        echo "Nome: " . $dado->getNome() . "<br />";

        echo "<h1>Segunda Parte</h1>";

        $dado->caixas("Mariana", 800, 120);
        $dado->caixas("Mario", 790, 242);
        $dado->caixas("Franklin", 1000, 300);
       
    ?>
</body>
</html>