<?php

require "objetoInterface.php";

class Exercicio implements objeto
{

    public function __toString()
    {
        echo "Estou sendo convertido para string";
    }

    public function __invoke()
    {
        echo "Estou sendo chamado de metodo";
    }

    public function __set($parametro, $valor)
    {
        echo "Atribuindo a variavel {$parametro} {valor}";
    }

    public function __get($parametro)
    {
        echo "Acessando a o atributo {$parametro)";
    }
    public function __call($metodo, $valores)
    {
        echo " chamando {$metodo)";
    }
    public static function __callStatic($metodo, $valores)
    {
        echo " chamando {$metodo)";
    }
    public static function metodo()
    {
        //Nao funciona
    }
}

$obj = new Exercicio;
$obj->metodo();