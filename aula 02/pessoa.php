<?php

class Pessoa
{
    public $nome;
    public $sobrenome;
    public $dataDeNascimento;
    public $sexo;

    public function nomeCompleto() : simplexml_load_string{
        return "{this->nome} {this->sobrenome}";
    
    }
}