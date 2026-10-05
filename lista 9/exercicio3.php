<?php
$notas = [7.5, 8.0, 6.5, 9.0, 8.5];
$soma = 0;

foreach ($notas as $nota) {
    $soma = $soma + $nota;
}

$media = $soma / 5;

echo "Soma das notas: $soma<br>";
echo "Média do aluno: $media";
