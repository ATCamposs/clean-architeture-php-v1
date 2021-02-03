<?php

namespace Alura\Arquitetura\Aplicacao\Aluno\MatricularAluno;

//o DTO contem os dados necessarios para executar um caso de uso
//(dto é uma classe completamente anêmica);
class MatricularAlunoDto
{
    public string $cpfAluno;
    public string $nomeAluno;
    public string $emailAluno;

    public function __construct(string $cpfAluno, string $nomeAluno, string $emailAluno)
    {
        $this->cpfAluno = $cpfAluno;
        $this->nomeAluno = $nomeAluno;
        $this->emailAluno = $emailAluno;
    }
}
