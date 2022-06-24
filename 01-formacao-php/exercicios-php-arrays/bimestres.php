<?php

$notasBimeste1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimeste2 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Maria' => 10,
];

/*
***********************************************************************************************
Diferença entre arrays:                                                                       *
                                                                                              *
Essa função vai retornar todos os elementos de notasBimeste1 que não estão em notasBimeste2   *
Obs.: Só é levado em consideração o valor                                                     *
                                                                                              *
Exemplo:                                                                                      *
var_dump(array_diff($notasBimeste1, $notasBimeste2));                                         *
                                                                                              *
Diferença entre arrays utilizando as chaves e ignorando os valores                            *
Exemplo2:                                                                                     *
                                                                                              *
var_dump(array_diff_key($notasBimeste1, $notasBimeste2));                                     *
***********************************************************************************************
*/

//diferença entre arrays comparando as chaves e os valores
var_dump(array_diff_assoc($notasBimeste1, $notasBimeste2));
