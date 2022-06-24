<?php

$cursos = file_get_contents('lista-cursos.txt');

echo $cursos;

//le o arquivo, e transforma cada linha em um indece de array
$cursos = file('lista-cursos.txt');

var_dump($cursos);

