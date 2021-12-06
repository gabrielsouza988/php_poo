<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Pessoa, Cpf, Endereco};
class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }
}
