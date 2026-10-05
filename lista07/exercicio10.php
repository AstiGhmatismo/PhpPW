<?php
$peso = 70;    
$altura = 1.75; 

$imc = $peso / ($altura * $altura);

switch (true) {
    case ($imc < 18.5):
        echo "Abaixo do peso";
        break;
    case ($imc < 25):
        echo "Peso normal";
        break;
    case ($imc < 30):
        echo "Sobrepeso";
        break;
    default:
        echo "Obesidade";
}
