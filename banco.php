<?php

require_once 'autoload.php';

use Projeto\Banco\Modelo\Conta\Titular;
use Projeto\Banco\Modelo\Endereco;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Little Whingeing', 'Surrey', 'Privet Drive', '4');
$valter = new Titular(new CPF('123.456.009-34'), 'Dursley', $endereco);
try {
    $primeiraConta = new Conta($valter); //ficção
} catch (Error $e) {
    echo "Erro capturado: " . $e->getMessage();
}
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$petunia = new Titular(new CPF('698.549.548-10'), 'Petúnia', $endereco);
$segundaConta = new Conta($petunia);
var_dump($segundaConta);

$ordemDaFenix = new Endereco('Londres', 'Borough of Islington', 'Largo Grimmauld', '12');
$siriusBlack = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $ordemDaFenix));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
