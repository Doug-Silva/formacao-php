<?php

//Arrays associativos
$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

//Lista de arrays
$contasCorrentes = [$conta1, $conta2, $conta3];

//Buscando pelos titulares das contas correntes
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}