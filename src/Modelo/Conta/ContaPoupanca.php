<?php 

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{

    protected function valorTarifa(): float
    {
        return 0.03;
    }

}
