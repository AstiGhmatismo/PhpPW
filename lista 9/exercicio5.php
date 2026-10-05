<?php
$estoques = [
    "Espada" => 10,
    "Poção" => 3,
    "Escudo" => 7,
    "Arco" => 4,
    "Capa" => 6
];

echo "Produtos com estoque maior que 4:<br>";

foreach ($estoques as $produto => $quantidade) {
    if ($quantidade > 4) {
        echo "$produto - Estoque: $quantidade<br>";
    }
}
