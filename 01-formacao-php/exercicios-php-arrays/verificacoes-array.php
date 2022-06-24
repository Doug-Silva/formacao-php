<?php

$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//verificar se é um array
if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

//verificar se é um array numerico, sequencial (lista)
var_dump(array_is_list($notas));

/*
*******************************************************************
array_key_exists = Verifica se a chave existe.                    *
isset = Verifica se a chave existe e não é nula.                  *
in_array = Verifica se o valor existe.                            *
*******************************************************************
*/

//verifica se chave dentro do array existe
echo 'Vinicius fez a prova:' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

/*
*******************************************************************
Verifica se a chave dentro do array existe e não é nula.          *
                                                                  *
echo 'Vinicius fez a prova:' . PHP_EOL;                           *
var_dump(isset($notas['Vinicius']));                              *
*******************************************************************
*/

//verifica se o valor em um array existe
echo 'Alguém tirou nota 10?' . PHP_EOL;
var_dump(in_array(10, $notas));

//buscar no array chave seguindo determinado valor
echo 'Quem tirou nota 10?' . PHP_EOL;
echo array_search(10, $notas);

