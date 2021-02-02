<?php

namespace Alura\Arquitetura\Dominio;

use InvalidArgumentException;
//Esta classe não é uma entidade, mas sim um "objeto de valor"
class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        if (filter_var($endereco, \FILTER_VALIDATE_EMAIL) === false) {
            throw new InvalidArgumentException(
                "Endereço de e-mail inválido"
            );
        }

        $this->endereco = $endereco;
    }

    public function __toString(): string
    {
        return $this->endereco;
    }
}