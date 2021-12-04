<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular;
    protected float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorSacar): void
    {
        $taxaTarifa = $valorSacar * $this->valorTarifa();
        $valorDescontado =  $valorSacar + $taxaTarifa;

        if ($valorDescontado > $this->saldo) {
            echo "Saldo na conta insuficiente!";
            return;
        }

        $this->saldo -= $valorDescontado;
    }

    abstract protected function valorTarifa(): float;

    public function depositar(float $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            echo "Valor do deposito insuficiente!";
            return;
        }

        $this->saldo += $valorDeposito;
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperarCpf();
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperarNome();
    }

    public function recuperarNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
