<?php

namespace Alura\Banco\Modelo;

Abstract class Pessoa
{
    private CPF $cpf;
    protected string $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
    }

    public function recuperarCpf()
    {
        return $this->cpf->recuperarCpf();
    }

    public function recuperarNome()
    {
        return $this->nome;
    }

    protected function validarNome(string $nome): void
    {
        if (strlen($nome) < 5) {
            echo "Nome deve ter mais do que 5 caracteres";
            exit;
        }

        $this->nome = $nome;
    }

}
