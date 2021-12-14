<?php
require_once "autoload.php";

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$diretor = new Titular(
    new CPF('123.456.789-10'),
    'Paulo',
    new Endereco('', '', '', '')
);

$autentica = new Autenticador;
$autentica->tentaLogin($diretor, 'abcd');
