<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    protected function valorTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valorTransferido, Conta $contaDestino): void
    {
        if ($valorTransferido > $this->saldo) {
            echo "Valor da transferencia insuficiente!";
            return;
        }

        $this->sacar($valorTransferido);
        $contaDestino->saldo += $valorTransferido;
    }
}
