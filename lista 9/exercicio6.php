<?php
$produtos = [
    "Espada" => 100.00,
    "Escudo" => 80.50,
    "Poção de Vida" => 25.90
];

foreach ($produtos as $nome => $preco) {
    $precoComDesconto = $preco * 0.80;

    echo "Produto: $nome<br>";
    echo "Preço original: R$ " . number_format($preco, 2, ",", ".") . "<br>";
    echo "Preço com 20% de desconto: R$ " . number_format($precoComDesconto, 2, ",", ".") . "<br><br>";
}
