<?php

class SomeClass{}
    //interface SomeInterface{}
        trait SomeTrait {}

            var_dump(new class(10)extends SomeClass implements{
                private $num;
                use SomeTrait;
                public function __construct($num)
                {
                    $this->num = $num;
                }
            });