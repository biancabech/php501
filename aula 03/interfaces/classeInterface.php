<?php

require_once 'interfaces.php';
class Template implements iTemplate
{
    private $vars = array();

    public function setvariable(string $nome, $var)
    {
        $this->vars[$nome] = $var;
    }
    public function getHtml($template) : string
    {
        foreach($this->vars as $name => $value){
            $template = str_replace(
                '{' . $name . '}',$value, $template);
            }
        
            return $template;
        }
}

$obj = new Template();
$obj->setvariable('nome', 'Philadelpho');
$obj->setvariable('email', 'philpho@nattalina.com.br');
$obj->setvariable('telefone', '(11) 99999-9999');
$obj->setvariable('endereco', 'Rua Consolacao 666');
$obj->setvariable('final', 'Construido com um padrao de projeto');