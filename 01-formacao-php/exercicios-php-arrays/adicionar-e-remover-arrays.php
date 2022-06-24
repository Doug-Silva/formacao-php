<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Diogo',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

//adicionar elementos no array
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

//adicionar somente um elemento no array
$alunos2022[] = 'Luiz';

//adicionar elementos no inicio do array
array_unshift($alunos2022, 'Stephane', 'Rafaela');

var_dump($alunos2022);
