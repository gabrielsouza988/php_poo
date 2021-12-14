<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperarSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha == '4321';
    }

}
