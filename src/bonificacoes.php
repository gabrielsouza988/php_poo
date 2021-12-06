<?php
require_once "autoload.php";

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;


$funcionario =  new Funcionario(
    'Gabriel de Oliveira Souza',
    new CPF('123.456.789-10'),
    'Programador',
    1000
);

$funcionaria =  new Funcionario(
    'Claudia', 
    new CPF('456.543.356-10'),
    'Programadora',
    3000
);

$bonificacao = new ControladorDeBonificacoes;
$bonificacao->adicionaBonificacao( $funcionario);
$bonificacao->adicionaBonificacao($funcionaria);

echo $bonificacao->recuperarBonificacao();
