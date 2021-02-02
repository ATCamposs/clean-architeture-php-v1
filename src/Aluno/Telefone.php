<?php

namespace Alura\Arquitetura\Aluno;

use InvalidArgumentException;
//Esta classe não é uma entidade, mas sim um "objeto de valor"
class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero) {
        //usando auto encapsulamento(setNumero) para diminuir o
        //tamanho do construtor
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }

    public function setDdd(string $ddd): void
    {
        //Guard Clause:
        // Filtrando o dado antes de atribuir o valor a variável
        if (preg_match('/\d{2}/', $ddd) !== 1) {
            throw new \InvalidArgumentException('DDD inválido');
        }

        $this->ddd = $ddd;
    }

    private function setNumero(string $numero): void
    {
        //Guard Clause:
        // Filtrando o dado antes de atribuir o valor a variável
        if (preg_match('/\d{8,9}/', $numero) !== 1) {
            throw new \InvalidArgumentException('Número de telefone inválido');
        }

        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}