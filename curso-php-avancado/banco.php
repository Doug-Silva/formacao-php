<?php

//inclui como arquivo importante, se tiver faltando,
//já apresenta fatal error e não executa o restante do codigo
require_once 'funcoes.php';

//inclui como arquivo não importante
//include 'funcoes.php';

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

//funcao unset - remover item array
unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['121.256.789-12']);

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <h1>Contas correntes</h1>

        <dl>
            <?php foreach($contasCorrentes as $cpf => $conta) { ?>
                <dt>
                    <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
                </dt>
                <dd>Saldo: <?= $conta['saldo']; ?></dd>
            <?php } ?>
        </dl>
    </body>
</html>