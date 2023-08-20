<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Estilo/CSS.css" />
    <title>Feriados</title>
</head>
<body>
    <div class = "resultado">
    <?php
        $mes = isset($_GET["slcNum"])? $_GET["slcNum"] : 0;

        switch ($mes) {
            case 1:
                echo '<h3>Mês: Janeiro</h3>
                <strong>FERIADO:</strong>
                <p>Dia 1/1: Confraternização Universal</p>';
                break;
            case 2:
                echo '<h3>Mês: Fevereiro</h3>
                <strong>FERIADO:</strong>
                <p> Dia 20/2: Carnaval</p>';
                break;
            case 3:
                echo '<h3>Mês: Março</h3>
                <h4>O mês de março não possui feriados</h4>';
                break;
            case 4:
                echo '<h3>Mês: Abril</h3>
                <strong>FERIADO:</strong>
                <p>Dia 7/4: Paixão de Cristo</p>';
                break;
            case 5:
                echo '<h3>Mês: Maio</h3>
                <strong>FERIADO:</strong>
                <p>Dia 1/5: Dia do Trabalho</p>';
                break;
            case 6:
                echo '<h3>Mês: Junho</h3>
                <strong>FERIADO:</strong>
                <p>Dia 8/6: Corpus Christi</p>';
                break;
            case 7:
                echo '<h3>Mês: Julho</h3>
                <h4>O mês de Julho não possui feriados</h4>';
                break;
            case 8:
                echo '<h3>Mês: Agosto</h3>
                <h4>O mês de Agosto não possui feriados</h4>';
                break;
            case 9:
                echo '<h3>Mês: Setembro</h3>
                <strong>FERIADO:</strong>
                <p>Dia 7/9: Independência do Brasil</p>';
                break;
            case 10:
                echo '<h3>Mês: Outubro</h3>
                <strong>FERIADO:</strong>
                <p> Dia 12/10: Nossa Sra. Aparecida - Padroeira do Brasil</p>';
                break;
            case 11:
                echo '<h3>Mês: Novembro</h3>
                <strong>FERIADO:</strong>
                <p> Dia 2/11: Finados <br>
                Dia 15/11: Proclamação da República</p>';
                break;
            case 12:
                echo '<h3>Mês: Dezembro</h3>
                <strong>FERIADO:</strong>
                <p> Dia 25/12: Natal </p>';
                break;
            default:
            echo "Valor Inválido!";
            break;
        }

    ?>
</body>
</html>
