<?php
$clima = "chuvoso";

switch ($clima) {
    case "nublado":
        echo "Leve um casaco, o dia está nublado!";
        break;
    case "ensolarado":
        echo "Use protetor solar!";
        break;
    case "chuvoso":
        echo "Leve um guarda-chuva!";
        break;
    case "nevando":
        echo "Agasalhe-se bem, está nevando!";
        break;
    case "tempestade":
        echo "Fique em casa e em segurança!";
        break;
    default:
        echo "Condição climática desconhecida.";
}
