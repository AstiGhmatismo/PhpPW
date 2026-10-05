<?php
$hora = 15;

switch (true) {
    case ($hora >= 5 && $hora <= 11):
        $mensagem = "Bom dia!";
        break;
    case ($hora >= 12 && $hora <= 17):
        $mensagem = "Boa tarde!";
        break;
    case ($hora >= 18 && $hora <= 21):
        $mensagem = "Boa noite!";
        break;
    case ($hora == 22 || $hora == 23 || ($hora >= 0 && $hora <= 4)):
        $mensagem = "Boa madrugada!";
        break;
    default:
        $mensagem = "Horário inválido. Informe de 0 a 23.";
        echo $mensagem;
        exit;
}

echo "São $hora horas. $mensagem";
