<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupaca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}