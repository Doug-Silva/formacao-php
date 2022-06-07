<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 13) {

        //Com o continue ele pula a linha 13
        continue;
    }

    echo "#$contador" . PHP_EOL;
}

/*for ($contador = 1; $contador <=15; $contador++) {
    if ($contador == 13) {

        //Com o break ele quebra o loop e exibe somente até a linha 12
        break;
    }

    echo "#$contador" . PHP_EOL;
}*/

