<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

//se no bloco de instruções tiver somente uma linha não nescessita colocar as chaves
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Até logo!";

/*
*******************************************************************************************************
Além disso, quando há apenas uma linha a ser executada, temos outra opção para tomar decisões.        *
Se precisamos, por exemplo, atribuir o valor a uma variável nos baseando em alguma condição,          *
podemos utilizar o que é chamado operador ternário. Sua sintaxe é a seguinte:                         *
                                                                                                      *
$variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;                                           *
                                                                                                      *
Exemplo:                                                                                              *
                                                                                                      *
$idade = 15;                                                                                          *
$mensagem = $idade < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;                          *
echo $mensagem;                                                                                       *
*******************************************************************************************************
*/