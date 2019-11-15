<?php

function __autoload($class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();
$funcionario->nome = 'Godofredo';
$funcionario->sobrenome = 'Silva';
$funcionario->dataNascimento = '1966-02-06';
$funcionario->sexo = 'Indefinido';
$funcionario->cargo = 'Escravo/Programador';
$funcionario->setor = 'Tecnologia da info';
$funcionario->atributoNovo = 'Novo';

echo "<pre>";
var_dump($funcionario);

echo '<hr>';
echo "Nome do funcionário: {$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->nome = 'Gabriel';
$cliente->sobrenome = 'Silva';
$cliente->dataNascimento = '1968-02-06';
$cliente->sexo = 'Masculino';
$cliente->atributoNovo = 'Novo';

var_dump($cliente);

echo "Nome do cliente {$cliente->nomeCompleto()}";

$estagiario = new Estagiario();
echo "<pre>";
var_dump($estagiario);