<?php
require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$diretor = new Diretor(
    'Paulo',
    new CPF('123.456.789-10'),
    5000
);

$autentica = new Autenticador;
$autentica->tentaLogin($diretor, '1234');
