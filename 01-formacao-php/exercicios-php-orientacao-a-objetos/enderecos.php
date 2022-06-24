<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro Qualquer',
    'Minha rua',
    '71C'
);

$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

//echo $outroEndereco->cidade;

echo $umEndereco . PHP_EOL;
echo $outroEndereco;