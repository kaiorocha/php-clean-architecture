<?php

namespace Alura\Arquitetura\Aplicacao\Aluno;

class MatricularAlunoDto
{

    public string $cpfAluno;
    public string $nomeAluno;
    public string $emailAluno;

    /**
     * @param string $cpfAluno
     * @param string $nomeAluno
     * @param string $emailAluno
     */
    public function __construct(string $cpfAluno, string $nomeAluno, string $emailAluno)
    {
        $this->cpfAluno = $cpfAluno;
        $this->nomeAluno = $nomeAluno;
        $this->emailAluno = $emailAluno;
    }


}