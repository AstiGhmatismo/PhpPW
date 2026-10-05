<?php
$galaxias = [
    ["nome" => "Via Láctea", "distancia" => "0 anos-luz"],
    ["nome" => "Andrômeda", "distancia" => "2,5 milhões de anos-luz"],
    ["nome" => "Triângulo", "distancia" => "2,7 milhões de anos-luz"]
];

echo "Galáxias exploradas:<br>";

foreach ($galaxias as $galaxia) {
    echo "Nome: " . $galaxia["nome"] . " - Distância: " . $galaxia["distancia"] . "<br>";
}
