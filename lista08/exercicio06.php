<?php

for ($bateria = 100, $movimento = 1; $bateria > 0; $movimento++) {
    $bateria -= 20;
    echo "Movimento " . $movimento . " - Bateria: " . $bateria . "%<br>";

    if ($bateria == 0) {
        echo "Atenção: a bateria acabou!<br>";
    }
}
