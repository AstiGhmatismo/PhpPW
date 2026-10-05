<?php
$num1 = 10;
$num2 = 5;
$operacao = 1;

switch ($operacao) {
    case 1:
        echo "Resultado: " . ($num1 + $num2);
        break;
    case 2:
        echo "Resultado: " . ($num1 - $num2);
        break;
    case 3:
        echo "Resultado: " . ($num1 * $num2);
        break;
    case 4:
        if ($num2 == 0) {
            echo "Erro: divisão por zero.";
        } else {
            echo "Resultado: " . ($num1 / $num2);
        }
        break;
    default:
        echo "Operação inválida.";
}
