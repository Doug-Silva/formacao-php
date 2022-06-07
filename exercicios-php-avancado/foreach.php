<?php

//Foreach
$contasCorrentes = [

    12345678910 => [
        'titular' => 'Douglas',
        'saldo' => 2000
    ],

    12346678911 => [
        'titular' => 'Roberta',
        'saldo' => 50000
    ],

    12145478810 => [
        'titular' => 'Marcos',
        'saldo' => 100
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}
