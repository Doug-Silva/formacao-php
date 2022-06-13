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

//Juntar duas listas a partir dos arrays
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);