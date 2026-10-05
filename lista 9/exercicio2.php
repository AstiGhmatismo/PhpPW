<?php
$pontuacoes = [100, 250, 175, 300, 120];
$total = 0;

foreach ($pontuacoes as $pontuacao) {
    $total = $total + $pontuacao;
}

echo "Pontuação total dos níveis: $total";
