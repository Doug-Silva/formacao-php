<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    //Teste autenticador..
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAutenticar($senha)) {
            echo "Ok, Usuário logado no sistema";
        } else {
            echo "Ops, Senha incorreta";
        }
    }
}