<?php

class TesteException
{
    public function mensagem(string $msg) : string
    {
        if (empty($msg)){
            throw new Exception("Parametro mensagem obrigatorio", 500);
        }
        return $msg;
    }
}

    $obj = new TesteException;

    try{
        echo $obj->mensagem('');
    } catch (Exception $e){
        echo "Mensagem e um parametro obrigatorio";
    } catch (ArgumentCountError $e) {
        echo "Falta parametro";
    } finally {
        echo "</br>Fim da execucao";
    }
   
