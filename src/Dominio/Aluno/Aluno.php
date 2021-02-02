<?php

namespace Alura\Arquitetura\Dominio\Aluno;

use Alura\Arquitetura\Dominio\Cpf;
use Alura\Arquitetura\Dominio\Email;

class Aluno
{
    //Uma entidade, precisa de uma identidade.
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;
    private string $senha;

    //Todo trabalho da FabricaAluno está declarado neste método
    //muito mais simples e prático. Agora posso usar
    // $aluno = Aluno::comCpfNomeEEmail('123123', 'suhdsahu', 'asd@sadsa.com');
    // e este método irá me retornar um aluno
    //(este método é um named constructor);
    public static function comCpfNomeEEmail(string $cpf, string $nome, string $email): self
    {
        return new Aluno(new Cpf($cpf), $nome, new Email($email));
    }

    public function __construct(Cpf $cpf, string $nome, Email $email) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefones[] = new Telefone($ddd, $numero);
        return $this;
    }

    //CPF não é uma string, mas devido ao método __toString presente nele
    //essa conversão é possível.(todos esses métodos)
    public function cpf(): string
    {
        return $this->cpf;
    }

    public function nome(): string
    {
        return $this->nome;
    }

    public function email(): string
    {
        return $this->email;
    }

    /** @return Telefone[] */
    public function telefones(): array
    {
        return $this->telefones;
    }
}