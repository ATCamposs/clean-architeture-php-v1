<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\Cpf;
use DomainException;
//Uma classe de infraestrutura pode, sem problemas, lançar uma excessão de dominio
class AlunoNaoEncontrado extends DomainException
{
    public function __construct(Cpf $cpf)
    {
        parent::__construct("Aluno Com CPF $cpf não encontrado");
    }
}