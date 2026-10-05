<?php
$idade = 20;

switch (true) {
    case ($idade < 13):
        echo "Criança";
        break;
    case ($idade >= 13 && $idade <= 17):
        echo "Adolescente";
        break;
    case ($idade >= 18 && $idade <= 64):
        echo "Adulto";
        break;
    default:
        echo "Idoso";
}
