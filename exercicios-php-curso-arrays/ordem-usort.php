<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],

    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],

    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

//Ordenar utilizando usort
function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}

/*
********************************************************
Exemplo mais simples:                                  *
                                                       *
function ordenaNotas(array $nota1, array $nota2): int  *
{                                                      *
    return $nota1['nota'] <=> $nota2['nota'];          *
}                                                      *
********************************************************
*/

/*
*************************************************************************************************
Função usort = Espera dois parametros                                                           *
                                                                                                *
1º o array que ela vai ordenar.                                                                 *
2º é uma funcao que ensina para ela o que vai ordenar.                                          *
                                                                                                *
Esta função precisa retornar um inteiro (int).                                                  *
Esse inteiro precisa ser < 0, se o primeiro parametro precisar vir antes no array ordenado.     *
Retorna > 0, se o segundo parametro precisar vir antes no array ordenado.                       *
Retorna 0, se els forem iguais, se não precisar modificar a ordem.                              *
*************************************************************************************************
*/

usort($notas, 'ordenaNotas');
var_dump($notas);