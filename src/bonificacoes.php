<?php
require_once "autoload.php";

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Gerente, Desenvolvedor, EditorDeVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario =  new Gerente(
    'Gabriel de Oliveira Souza',
    new CPF('123.456.789-10'),
    10000
);

$funcionaria =  new Desenvolvedor(
    'Claudia', 
    new CPF('456.543.356-10'),
    3000
);
$funcionaria->sobeDeNivel();

$editorVideo =  new EditorDeVideo(
    'Paulo Silva Ribeiro',
    new CPF('546.987.625-70'),
    4000
);

$bonificacao = new ControladorDeBonificacoes;
$bonificacao->adicionaBonificacao( $funcionario);
$bonificacao-> adicionaBonificacao($funcionaria);
$bonificacao->adicionaBonificacao($editorVideo);

echo $bonificacao->recuperarBonificacao();
