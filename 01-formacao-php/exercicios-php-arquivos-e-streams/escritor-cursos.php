<?php

//mode r = read (leitura do arquivo)
//mode w = write (escrita, com o cursor no começo do arquivo)
//mode a = write (escrita, com o cursor no final)

$arquivo = fopen('cursos-php.txt', 'a');

//$curso = 'Design Patterns PHP 1: Boas práticas de programação';
$curso = "\nDesign Patterns PHP 2: Boas práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);