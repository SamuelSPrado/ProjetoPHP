<?php

namespace Projeto\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Tentativa de saque no valor: $valorSaque, valor em conta: $saldoAtual.";
        parent::__construct($mensagem);
    }
}
