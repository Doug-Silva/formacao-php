<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

//Função percorre o array e transforma cada uma das chaves em uma variavel, e atribui a essa variavel o seu valor
extract($dados);

var_dump($nome, $nota, $idade);

//Função pega varias variaveis e transforma em um array
var_dump(compact('nome', 'nota', 'idade'));
