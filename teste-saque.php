<?php

use Projeto\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, SaldoInsuficienteException, Titular};
use Projeto\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Sirius Black',
        new Endereco('Petrópolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Sem saldo suficiente para realizar essa operação!" . PHP_EOL;
    echo $exception->getMessage();
}

echo $conta->recuperaSaldo();
