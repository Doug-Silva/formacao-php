<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    //exemplos de exceções e erros (multi-catch):
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao) {
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        echo $erroOuExcecao->getLine() . PHP_EOL;
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    //lançando uma exception
    throw new RuntimeException('Essa é a mensagem de exceção');

    //sera gerado um erro na aplicação
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;