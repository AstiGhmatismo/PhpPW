<?php

for ($amostra = 1; $amostra <= 13; $amostra++) {
    if ($amostra % 2 == 0) {
        echo "Amostra " . $amostra . ": vida encontrada!<br>";
    } else {
        echo "Amostra " . $amostra . ": nenhuma vida encontrada.<br>";
    }
}
