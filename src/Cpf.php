<?php

namespace Alura\Arquitetura;

use InvalidArgumentException;
//Esta classe não é uma entidade, mas sim um "objeto de valor"
class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        //usando auto encapsulamento(setNumero) para diminuir o
        //tamanho do construtor
        $this->setNumero($numero);
    }

    private function setNumero(string $numero)
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];
        //Guard Clause:
        // Filtrando o dado antes de atribuir o valor a variável
        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('CPF no formato inválido');
        }

        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return $this->numero;
    }
}