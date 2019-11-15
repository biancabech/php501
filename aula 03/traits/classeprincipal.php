<?php

require_once 'traits.php';

class Calculadora
{
    use Operacoes;
}
$calc = new Calculadora;

echo $calc->soma(1,2);