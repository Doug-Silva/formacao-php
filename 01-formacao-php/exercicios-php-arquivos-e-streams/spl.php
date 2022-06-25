<?php

//representando arquivo por objeto/classe
$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo $linha[0] . PHP_EOL;
}

//verificar data de criação do arquivo
$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');