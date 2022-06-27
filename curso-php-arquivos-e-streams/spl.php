<?php

//representando arquivo por objeto/classe
$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo spl . phputf8_encode($linha[0]);
}

//verificar data de criação do arquivo
$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');