<?php
require_once "autoload.php";

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Gabriel',
        new Endereco('Taiobeiras', 'Sagrada Familia', 'Rua paracatu', '123')
    ),
);
$conta->depositar(400);
$conta->sacar(100);
echo $conta->recuperarSaldo();

