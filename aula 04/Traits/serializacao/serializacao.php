<?php
class Funcionario
{
    public function oi(){
        echo "Ola<br>";
    }
    public function __destruct(){
        echo "Estou morrendo finalmente...";
    }
    public function __sleep(){
        return ['nome', 'cargo'];
    }
    public function __wakeup(){
        echo "Morri nao, pegadinha do malandro<br>";
        $this->sobrenome = 'Atribuido com o wake up';
    }
}

$funcionario = new Funcionario;

$funcionario->nome = 'Joaquim Jose';
$funcionario->sobrenome = 'da Silva Xavier';
$funcionario->dataDeNascimento = '1746-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = ' Morte';
$funcionario->setor = ' Funerario';

echo "<pre>";

var_dump($funcionario);

echo serialize($funcionario);

echo "<br>";

$serializado = serialize($funcionario);

$funcionario = unserialize($serializado);

$funcionario->oi();
