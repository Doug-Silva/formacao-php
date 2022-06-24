<?php

$arquivoCursos = fopen('lista-cursos.txt', 'r');

//filtro vai buscar todos os dados em letras maiusculas
stream_filter_append($arquivoCursos, 'string.toupper');

echo fread($arquivoCursos, filesize('lista-cursos.txt'));