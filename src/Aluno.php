<?php

namespace Alura\Arquitetura;

class Aluno
{
    //Uma entidade, precisa de uma identidade.
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefones;

    //Todo trabalho da FabricaAluno está declarado neste método
    //muito mais simples e prático. Agora posso usar
    // $aluno = Aluno::comCpfNomeEEmail('123123', 'suhdsahu', 'asd@sadsa.com');
    // e este método irá me retornar um aluno
    //(este método é um named constructor);
    public static function comCpfNomeEmail(string $cpf, string $nome, string $email): self
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
}