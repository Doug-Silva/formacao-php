<?php

use Alura\Banco\Modelo\{CPF, Funcionario};

$umFuncionario = new Funcionario(
    'Vinícius Dias',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umFuncionario = new Funcionario(
    'Patricia',
    new CPF('987.654.321-10'),
    'Gerente',
    3000
);
