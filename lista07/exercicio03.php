<?php
$numero = 2; 

switch ($numero) {
    case 1:
        echo "Você escolheu Rock. Tocando 'Bohemian Rhapsody'!";
        break;
    case 2:
        echo "Você escolheu Pop. Tocando 'Blinding Lights'!";
        break;
    case 3:
        echo "Você escolheu Sertanejo. Tocando 'Evidências'!";
        break;
    case 4:
        echo "Você escolheu Eletrônica. Tocando 'Hardtekk'!";
        break;
    default:
        echo "Opção inválida.";
}
