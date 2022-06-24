<?php

//$curso = 'Design Patterns PHP 1: Boas práticas de programação';
$curso = "\nDesign Patterns PHP 2: Boas práticas de programação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND | FILE_TEXT);