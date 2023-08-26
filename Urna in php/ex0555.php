<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/CSS.css" />
    <title>Votação - Segundo Turno</title>
</head>
<body>
<div class="resultado">
    <?php
        session_start(); //iniciar a contabilização dos votos

        $votosAlibaba = isset($_SESSION["votosAlibaba"])? $_SESSION["votosAlibaba"] : 0;
        $votosAlcapone = isset($_SESSION["votosAlcapone"])? $_SESSION["votosAlcapone"] : 0;
        $votosBrancos = isset($_SESSION["votosBrancos"])? $_SESSION["votosBrancos"] : 0;
        $votosNulos = isset($_SESSION["votosNulos"])? $_SESSION["votosNulos"] : 0;

        echo "Total de voto(s) para Alibaba: $votosAlibaba<br>";
        echo "Total de voto(s) para Alcapone: $votosAlcapone<br>";
        echo "Total de voto(s) Branco: $votosBrancos<br>";
        echo "Total de voto(s) Nulos: $votosNulos<br><br>";

        $votostotal = $votosAlibaba + $votosAlcapone + $votosBrancos + $votosNulos;
        echo "Total de votos: $votostotal<br>";

        if($votosAlibaba > $votosAlcapone){
            echo "<br>Ganhador: Alibaba com $votosAlibaba voto(s)<br>";
        }
        elseif($votosAlibaba < $votosAlcapone){
            echo "<br>Ganhador: Alcapone com $votosAlcapone voto(s)<br>";
        }
        elseif($votosAlcapone == $votosAlibaba){
            echo "<br>Ganhador: Empate<br>";
        }
    ?>
</div>
    <form action="ex055.php" method="post" id="enc">
        <button type="submit" name="btn" id="encer">Iniciar outra votação</button>
   </form>

</body>
</html>