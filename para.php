<?php
$valor = 5;
$operacao = "+";
$resultado = 0; 

//calculadora
if ($operacao =="+") {
    echo $resultado = $valor + 10;
} elseif ($operacao == "-") {
    echo $resultado =  $valor - 10;
    } elseif ($operacao == "*") {
    echo $resultado =  $valor * 10;
    } elseif ($operacao == "/") {
    echo $resultado =  $valor / 10;
    } else {
        echo "operação invalida";
    }
    echo "<br>";
    echo "resultado: " . $resultado ; 
    for ( $i = 1; $i <10 ;$i ++) {
echo $valor * $i . "<br>"; 

    }