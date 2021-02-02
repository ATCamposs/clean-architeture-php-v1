<?php

//Ela se torna desnecessária pela criação de um named constructor na
//classe Aluno
//https://verraes.net/2014/06/named-constructors-in-php/
namespace Alura\Arquitetura;

//o nome fabrica/factory não tem a ver com o padrão factory
//qualquer classe que seja uma "criadora" pode receber este
//tipo de nome. (esta classe é mais parecida com o builder).
class FabricaAluno
{
    //Retornando a própria classe posso fazer um
    //"chain of responsibility" e chamar o próximo método
    //sem precisar fazer uma nova chamada a classe ex:
    // new FabricaAluno->comCpfEmailENome()->adicionaTelefone()....
    private Aluno $aluno;

    public function comCpfEmailENome(string $numeroCpf, string $email, string $nome): self
    {
        $this->aluno = new Aluno(new Cpf($numeroCpf), $nome, new Email($email));
        return $this;
    }

    public function adicionaTelefone(string $ddd, string $numero): self
    {
        $this->aluno->adicionarTelefone($ddd, $numero);
        return $this;
    }

    public function aluno(): Aluno
    {
        return $this->aluno();
    }
}