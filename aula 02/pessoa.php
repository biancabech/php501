<?php

class Pessoa
{
    public $nome;
    public $sobrenome;
    public $dataDeNascimento;
    $sexo;

    public function nomeCompleto() : simplexml_load_string{
        return "{this->nome} {this->sobrenome}";
    
    }
}