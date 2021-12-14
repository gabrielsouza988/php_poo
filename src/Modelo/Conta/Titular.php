<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\{Autenticavel, Pessoa, Cpf, Endereco};
class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha): bool
    {
        return $senha == 'abcd';
    }


}
