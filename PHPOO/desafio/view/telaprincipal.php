<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Tela principal</title>
</head>
<body>
    <h2>Bem-vindo,
    <?php 
        session_start();
        include_once('../control/logincomLoop.php');
        echo " " . $_SESSION['usuario'] . "!";
    ?>
    </h2>
</body>
</html>