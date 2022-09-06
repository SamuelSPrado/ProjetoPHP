<?php

namespace Projeto\Banco\Service;

use Projeto\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Login realizado com sucesso!";
        } else {
            echo "Falha ao se conectar com o sistema!";
        }
    }
}
