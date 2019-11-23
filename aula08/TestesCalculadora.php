<?php

    require_once '.vendor/phpunit/phpunit/phpunit/tests/unit/Framework/TestCaseTest.php';
    require_once 'Calculadora.php';

    use PHPUnit\Framework\TesteCase;

    class CalculadoraTest extends TesteCase
    {
        public function testSomar(
            {
                $operacoes = new Calculadora();
                $resultadoSoma = somar(1,3);

                $this->assertEquals(4,$resultadoSoma, 'Erro na Soma');
            }
        )
    
    }