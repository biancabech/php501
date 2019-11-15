<?php

class Cliente extends Pessoa

public $rg;
$cpf;

public function nomeCompleto() : string
    {
        return "{$this->sobrenome}, {$this->nome}";
    }
}