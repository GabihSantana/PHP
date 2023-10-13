<?php
    $taxaImposto = 0.5;
    $custo = 13.3;
    $total = 0;

    function somaImposto($taxa, $valor){
        global $total;
        $total = $valor * $taxa;
        $total += $valor;

        return $total;
    }

    somaImposto($taxaImposto, $custo);
    echo "Valor do imposto: R\${$total} <br>";
?>