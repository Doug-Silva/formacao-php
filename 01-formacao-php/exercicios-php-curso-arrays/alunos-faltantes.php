<?php

$notasBimeste1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimeste2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

//Pegar um array com o nome dos alunos que faltaram
$alunosFaltantes = array_diff_key($notasBimeste1, $notasBimeste2);

//Função recebe um array e devolve suas chaves
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));