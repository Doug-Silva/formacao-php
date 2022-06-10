<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

/*
****************************************************************************
sort = ordena em ordem crescente.                                          *
rsort = ordena em ordem decrescente.                                       *
ksort = ordena pelas chaves do array, em ordem crescente.                  *
krsort = ordena pelas chaves do array, em ordem decrescente.               *
                                                                           *
colocar (a) antes do sort e rsort mantem as chaves associativas do array.  *
****************************************************************************
*/

arsort($notas);
var_dump($notas);