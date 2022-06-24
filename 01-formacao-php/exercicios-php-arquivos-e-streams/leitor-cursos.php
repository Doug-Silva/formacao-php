<?php

//abre um arquivo para leitura
$arquivo = fopen('lista-cursos.txt', 'r');

//verifica se está no fim do arquivo
while (!feof($arquivo)) {
    //Se ainda não está no fim do arquivo, leia uma linha
    $curso = fgets($arquivo);

    echo $curso;
}

//fechar o arquivo de script
fclose($arquivo);