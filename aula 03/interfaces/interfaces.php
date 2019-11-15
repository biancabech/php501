<?php

interface iTemplate
{
    public function setVariable(string $nome, $var);
    public function gethtml($template) : string;
}