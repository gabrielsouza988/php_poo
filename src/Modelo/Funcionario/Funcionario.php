<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private string $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperarCargo()
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function recuperarSalario()
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }
}
