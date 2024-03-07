<?php

namespace Alura\Arquitetura\Aplicacao\Aluno;

use Alura\Arquitetura\Dominio\Aluno\RepositorioAluno;

class MatricularAluno
{
    private RepositorioAluno $repositorioAluno;

    /**
     * @param RepositorioAluno $repositorioAluno
     */
    public function __construct(RepositorioAluno $repositorioAluno)
    {
        $this->repositorioAluno = $repositorioAluno;
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comCpfNomeEEmail($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        $this->repositorioAluno->adicionar($aluno);
    }
}