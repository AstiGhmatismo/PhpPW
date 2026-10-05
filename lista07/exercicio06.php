<?php
$emocao = "triste";

switch ($emocao) {
    case "feliz":
        echo "Que ótimo que você está feliz! Aproveite o momento!";
        break;
    case "triste":
        echo "Eu sinto muito que você esteja triste. Tente ouvir uma música que você gosta ou conversar com um amigo.";
        break;
    case "nervoso":
        echo "Respire fundo e tente relaxar. Uma caminhada pode ajudar.";
        break;
    case "cansado":
        echo "Você merece um descanso. Que tal uma pausa e um bom sono?";
        break;
    case "entediado":
        echo "Que tal assistir a um filme ou aprender algo novo?";
        break;
    default:
        echo "Não conheço essa emoção, mas estou aqui para conversar.";
}
