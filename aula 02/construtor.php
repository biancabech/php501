<?php

class profissao{
    //ctrl+shift+i Formatar segundo psr2
    public $salario;
    public $cargo;
    public $tempoDeCasa;

    /**
     * Classe construtora
     */

     public function __construct($cargo)
     {
         echo $cargo . " Criando com sucesso";  
     }
     public function __destruct()
     {
        echo " Objeto sendo destruido";
    }
}
echo "<pre>";
$pedreiro = new Profissao('Pedreiro');
echo "<br>";
var_dump($pedreiro);
?>