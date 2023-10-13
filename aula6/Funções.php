<?php
    //( ) = parâmentros, há funções que precisam e que não
    function exibirMensagem(){
        echo "Boa noite!";
    }

    //pode chamar onde quiser e colocar onde quiser
    exibirMensagem();

    // função com argumento
    $msg = "Olá, tudo bem?";
    $nome = "Paulo Dias da Silva";

    function exibeMensagem($mensagem, $n, $i = 20){
        echo "<br>$mensagem<br>";
        echo "Nome: $n<br>";
        echo "Idade: $i<br>";
    }
    exibeMensagem($msg, $nome);

    //Função com retorno
    function calculaMedia($v1, $v2, $v3){
        $media = ($v1 + $v2 + $v3) / 3;
        return $media;
    }
    echo "Média: " . calculaMedia(12, 15, 15);
    
?>