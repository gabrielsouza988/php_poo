<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if (!$diretor->podeAutenticar($senha)) {
            echo 'Ops.. Senha invalida';
        } else {
            echo 'Usuario Logado';
        }
    }
}
