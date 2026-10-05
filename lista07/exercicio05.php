<?php
$genero = "rock";

switch ($genero) {
    case "rock":
        echo "Artista recomendado: Queen.";
        break;
    case "pop":
        echo "Artista recomendado: Michael Jackson.";
        break;
    case "jazz":
        echo "Artista recomendado: Louis Armstrong.";
        break;
    case "hip-hop":
        echo "Artista recomendado: Eminem.";
        break;
    case "sertanejo":
        echo "Artista recomendado: Jorge & Mateus.";
        break;
    default:
        echo "Gênero não encontrado.";
}
