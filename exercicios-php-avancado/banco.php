<?php

//Inclui como arquivo não importante
include 'funcoes.php';

//Inclui como arquivo importante, se tiver faltando,
//já apresenta fatal error e não executa o restante do codigo

//require_once 'funcoes.php';

$contasCorrentes = [

    '123.456.789-10' => [
        'titular' => 'Henrique',
        'saldo' => 10000
    ],

    '123.456.689-11' => [
        'titular' => 'Maria',
        'saldo' => 300
    ],

    '121.256.789-12' => [
        'titular' => 'Aline',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['121.256.789-12'] = depositar(
    $contasCorrentes['121.256.789-12'],
    900
);

//Funcao unset - remover item array
unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['121.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {

    //Funcao List
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}
