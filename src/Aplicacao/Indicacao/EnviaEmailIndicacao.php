<?php

namespace Alura\Arquitetura\Aplicacao\Indicacao;

use Alura\Arquitetura\Aluno\Aluno;
//Um serviço de envio de email, diferente de uma criptografia de senha
//não faz parte da empresa, mas sim da aplicação.
//por isso tem um lugar sepado.(a aplicação)
//Dentro do domínio, só devem existir dores da equipe de negócio da empresa;
interface EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicado): void;
}
