<?php

namespace Alura\Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent:: __construct($cpf, $nome);
        $this->cargo = $cargo;
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

}
