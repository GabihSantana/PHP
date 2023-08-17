<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube de Festas</title>
</head>
<body>
    <form method="get" action="ex2_2.php">
        <?php
        $nome = isset($_GET["inpName"])? $_GET["inpName"] : nome;
        $idade = isset($_GET["inpAge"])? $_GET ["inpAge"] : 0;

        if($idade >= 18){
            echo "Você pode reservar um ingresso para um clube de festas! <br><br>";
            echo '<label> 
            Seleciona o valor da entrada: 
            </label>
            <select name="slcValor" id="slcValor" required>
                <option value="" disable selected>Selecione o Valor</option>
                <option value="normal"> R$20,00 </option>
                <option value="VIP"> R$50,00 </option>
            </select>
                <p>Você é aluno do IFSP?</p>
            <select name="slcYN" id="slcYN" required>
                <option value="" disabled selected>Selecione a opção</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>';
            echo '<input type="submit" value="Enviar"></input>';
            }
        elseif ($idade < 18){
            $tempo = 18 - $idade;
            echo "<h3>Desculpe $nome, faltam $tempo anos para completar 18 anos e poder ir às festas!</h3>";
        }
    ?>

</form>

</body>
</html>

