<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados;

var_dump($nome, $nota, $idade);