<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;

$endereco = new Endereco('Taiobeiras', 'Sagrada Familia', 'Rua paracatu', '653');
$gabriel = new Titular(new CPF('158.966.366-79'), 'Gabriel de Oliveira Souza', $endereco);
$conta = new Conta($gabriel);
$conta->depositar(200);

$enderecoDois = new Endereco('Cidade Teste', 'bairro teste', 'Rua teste', '878');
$joao = new Titular(new CPF('123.433.677-89'), 'João Pedro Costa', $enderecoDois);
$contaDois = new Conta($joao);
$contaDois->depositar(500);

var_dump($conta);
echo PHP_EOL;
var_dump($gabriel->recuperarEndereco());
echo PHP_EOL;
var_dump($contaDois);
// echo $conta->recuperarNomeTitular();
// echo PHP_EOL;
// echo $conta->recuperarCpfTitular();
// echo PHP_EOL;
// echo $conta->recuperarSaldo();
// echo PHP_EOL;
// echo $conta->recuperarNumeroDeContas();
