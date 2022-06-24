<?php

//abre um arquivo para leitura
$arquivo = fopen('lista-cursos.txt', 'r');

/**
 * //ler arquivo linha a linha: ideal para arquivos grandes
 *
 * verifica se está no fim do arquivo
 * while (!feof($arquivo)) {
    //Se ainda não está no fim do arquivo, leia uma linha
    $curso = fgets($arquivo);

    echo $curso;
}
 */

//ler arquivo inteiro: ideal para arquivos pequenos

//pegar o tamnho do arquivo
$tamanhoDoArquivo = filesize('lista-cursos.txt');

//ler o arquivo inteiro
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

//fechar o arquivo de script
fclose($arquivo);