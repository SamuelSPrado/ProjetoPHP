<?php

use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\Diretor;
use Projeto\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Projeto\Banco\Modelo\Funcionario\Gerente(
    'Molly Weasley',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
