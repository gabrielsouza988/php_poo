<?php

namespace Alura\Banco\Modelo;

final class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validarCpf($cpf);
    }

    private function validarCpf(string $cpf): void
    {
        if (strlen($cpf) < 5) {
            echo "deve ser maior do que 5 caracteres!";
            exit;
        }

        $this->cpf = $cpf;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf;
    }
}
