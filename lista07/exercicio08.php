<?php
$nota = 8; 

switch ($nota) {
    case 10:
        echo "Excelente!";
        break;
    case 8:
    case 9:
        echo "Muito bom!";
        break;
    case 6:
    case 7:
        echo "Bom, mas pode melhorar.";
        break;
    default:
        echo "Reprovado.";
}
