<?php

require_once 'Operacoes.php';

class Calculadora
{
    use Operacoes;
    public function __construct()
    {
        echo "Criando calculadora...<br>";
    }

}

$calculos = new Calculadora;

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if (isset($n1) and isset($n2)) {
    echo $calculos->somar($n1, $n2);
}
;

trait A
{
    public function a(){
        echo "Eu sou a funcao a da trait a <br>";
    }
    public function b(){
        echo "Eu sou a funcao b da trait a <br>";
    }
}
trait B {
    public function b(){
        echo "Eu sou a funcao b da trait b <br>";
    }
    public function c(){
        echo "Eu sou a funcao c da trait b <br>";
    }
}

var_dump(new class{
    use a, b{
        B::b insteadOf A;
        A::a insteadOf B;
        B::a as metodoAdaTraitB;
    }
})->metodoAdaTraitB();

trait C
{
use A, B{
    B::b insteadOf A;
    A::a insteadOf B;
    B::a as metodoAdaTraitB;
    }
}

var_dump(
    (new class{use C;})->metodoAdaTraitB()
    //$obj->metodoAdaTraitB();
);





