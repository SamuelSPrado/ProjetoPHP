<?php

use Projeto\Banco\Modelo\Conta\ContaCorrente;
use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Sirius Black',
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Recurso inválido! Valor a depositar precisa ser positivo!";
}
