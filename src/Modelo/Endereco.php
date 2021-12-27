<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */
final class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro} e {$this->cidade}";
    }

    public function __get(string $nomeAtributo)
    {
        $metodo = 'recuperar' . ucfirst($nomeAtributo);

        return $this->$metodo();
    }

    public function recuperarCidade()
    {
        return $this->cidade;
    }

    public function recuperarBairro()
    {
        return $this->bairro;
    }

    public function recuperarRua()
    {
        return $this->rua;
    }

    public function recuperarNumero()
    {
        return $this->numero;
    }

}