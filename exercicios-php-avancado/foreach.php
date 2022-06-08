<?php

//Foreach
$contasCorrentes = [

    '123.456.789-18' => [
        'titular' => 'Douglas',
        'saldo' => 2000
    ],

    '123.466.789-79' => [
        'titular' => 'Roberta',
        'saldo' => 50000
    ],

    '121.454.788-35' => [
        'titular' => 'Marcos',
        'saldo' => 100
    ]
];

$contasCorrentes ['123.258.852-14'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
