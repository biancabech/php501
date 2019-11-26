<?php

use PHPUnit\Framework\TestCase;

class AlgumaClasse
{
    public function fazAlgo()
    {
        //Funcao a implementar
    }

    public function RetornaNumero()
    {
        //funcao a implementar
    }
}

class Mock extends TestCase
{
    public function testMock(){
        $duble = $this->createMock(AlgumaClasse::class);

        $duble->method('FazAlgo')
            ->willReturn('foo');

        $duble->method('RetornaNumero')
            ->willReturn(5);    

            $this->assertSame('foo',$duble->fazAlgo(),"Nao fez algo");
            $this->assertEquals(5,$duble->RetornaNumero());
    }

}