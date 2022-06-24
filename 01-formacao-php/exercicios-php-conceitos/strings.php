<?php

$idade = 30;

//aspas simples concatenar com a variavel
echo 'Olá Mundo! Minha idade é ' . $idade;

//aspas duplas o php já entende a variavel
echo "\nOlá Mundo!\r\n";
echo "\n";
echo "\t";
echo "Minha idade é $idade anos";

//outra maneira de quebra de linha no php
//utilizado em diferentes sistemas operacionais
echo "Olá Mundo!" . PHP_EOL;
echo "Minha idade é $idade anos";