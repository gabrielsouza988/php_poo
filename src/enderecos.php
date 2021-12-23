<?php

use Alura\Banco\Modelo\Endereco;

require_once "src/autoload.php";

$umEndereco = new Endereco('Taiobeiras', 'Sagrada Familia', 'Paracatu', 432);
$doisEndereco = new Endereco('Salinas', 'Seila oq', 'Rio Pardo', 764);

echo $umEndereco . PHP_EOL;
echo $doisEndereco;