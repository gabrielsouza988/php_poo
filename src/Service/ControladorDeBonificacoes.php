<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    protected float $bonificacao = 0;

    public function recuperarBonificacao(): float
    {
        return $this->bonificacao;
    }

    public function adicionaBonificacao(Funcionario $funcionario): float
    {
        return $this->bonificacao += $funcionario->calculaBonificacao();
    }
   
}
