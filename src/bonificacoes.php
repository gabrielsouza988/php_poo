<?php
require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente, Desenvolvedor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario =  new Gerente(
    'Gabriel de Oliveira Souza',
    new CPF('123.456.789-10'),
    'Gerente',
    10000
);

$funcionaria =  new Desenvolvedor(
    'Claudia', 
    new CPF('456.543.356-10'),
    'Programadora',
    3000
);
$funcionaria->sobeDeNivel();

$bonificacao = new ControladorDeBonificacoes;
$bonificacao->adicionaBonificacao( $funcionario);
$bonificacao->adicionaBonificacao($funcionaria);

echo $bonificacao->recuperarBonificacao();
