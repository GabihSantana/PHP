<?php //zerar a votação: 
    if (isset($_POST["btn"])) {
        session_start();
        unset($_SESSION["votosAlibaba"]);
        unset($_SESSION["votosAlcapone"]);
        unset($_SESSION["votosBrancos"]);
        unset($_SESSION["votosNulos"]);
        echo "<script>";
        echo "const aviso = 'Nova votação inicializada';";
        echo "alert(aviso)";
        echo "</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/CSS.css" />
    <title>Votação - Segundo Turno</title>
</head>
<body>
    <form action="" method="post">
        <h1>Eleição - Segundo Turno</h1>
        <label>
            Digite o número do candidato: 
        </label>
        <input type="number" id="voto" name="voto" min="00" max="99" autocomplete="off" placeholder="xx" required>
        <br>
        <button type="reset" id="limp">Limpar</button>
        <br>
        <button type="submit" id="btn">Confirmar</button>
    </form>

    <?php
        if (isset($_POST["voto"])) {
            $voto = $_POST["voto"];

            session_start(); //iniciar a contabilização dos votos

            if($voto == "83"){
                $_SESSION["votosAlibaba"] = isset($_SESSION["votosAlibaba"])? $_SESSION["votosAlibaba"] + 1 : 1;
            }
            elseif ($voto == "93") {
                $_SESSION["votosAlcapone"] = isset($_SESSION["votosAlcapone"])? $_SESSION["votosAlcapone"] + 1 : 1;
            }
            elseif ($voto == "00") {
                $_SESSION["votosBrancos"] = isset($_SESSION["votosBrancos"])? $_SESSION["votosBrancos"] + 1 : 1;
            }
            else {
                $_SESSION["votosNulos"] = isset($_SESSION["votosNulos"])? $_SESSION["votosNulos"] + 1 : 1;
            }
            echo "<script>";
            echo "const mensagem = 'Você votou em $voto';";
            echo "alert(mensagem);";
            echo "</script>";
        }
    ?>
    <form action="ex0555.php" method="post" id="enc">
        <button type="submit" id="encer">Encerrar votação</button>
    </form>
    
</body>
</html>