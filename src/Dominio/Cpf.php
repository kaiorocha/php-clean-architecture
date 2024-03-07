<?php

namespace Alura\Arquitetura\Dominio;

use http\Exception\InvalidArgumentException;

class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->setNumero($numero);
    }

    public function __toString():string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): void
    {
        $opcoes = [
            'options' => [
                'regex' => '/\d{3}\.\d{3}\.d{3}\-\d{2}/'
            ]
        ];

        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new InvalidArgumentException(
                'CPF no formato inválido'
            );
        }

        $this->numero = $numero;
    }
}