<?php 
$v1 = $_POST['valor1'];
echo $v1; 

echo '<br>';

$v2 = $_POST['valor2'];
echo $v2;

echo '<br>';
$v3 = $_POST['valor0'];
if ($v3 =="+") {
    echo   $v1 + $v2;
} elseif ($v3 == "-") {
    echo   $v1 - $v2;
    } elseif ($v3 == "*") {
    echo   $v1 * $v2;
    } elseif ($v3 == "/") {
    echo   $v1 / $v2;
    } else {
        echo "operação invalida";

    }

?>