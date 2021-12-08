<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperarSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return $this->recuperarSalario() * 0.05;
    }

}
