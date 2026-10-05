<?php
$planetas = [
    "Kepler-22b" => "Rochoso",
    "Zephyr" => "Gasoso",
    "Terra Nova" => "Rochoso",
    "Gigantus" => "Gasoso",
    "Mirax" => "Rochoso"
];

echo "Planetas descobertos:<br>";

foreach ($planetas as $nome => $tipo) {
    echo "Planeta: $nome - Tipo: $tipo<br>";
}
