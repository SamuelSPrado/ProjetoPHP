<?php

require_once 'autoload.php';

use Projeto\Banco\Service\ControladorDeBonificacoes;
use Projeto\Banco\Modelo\CPF;
use Projeto\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor(
    'Bill Arthur Weasley',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Septimus Weasley',
    new CPF('987.654.321-10'),
    3000
);

$umDiretor = new Diretor(
    'drella Weasley',
    new CPF('123.951.789-11'),
    5000
);

$umEditor = new EditorVideo(
    'Percy Weasley',
    new CPF('456.987.231-11'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
