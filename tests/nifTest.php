<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\nif;
final class nifTest extends TestCase{
    public function DPtestnif(){
        $dni= new nif(12345678, "V");
        return [
            "Prueba 1" => [
                '12345678V', $dni
            ]
        ];
    }
    /**
     * @dataProvider DPtestnif
     */
    public function testnif($esperado, $actual){
        $this-> assertEquals(
            $esperado,
            $actual->__toString()
        );

    }

    public function DPtestnifcorrecto(){
        $dni= new nif(12345678, "P");
        return [
            "Prueba 2" => [
                true, $dni
            ]
        ];
    }
    /**
     * @dataProvider DPtestnifcorrecto
     */
    public function testnifcorrecto($esperado, $actual){
        $this-> assertTrue(
            $esperado,
            $actual->isNifCorrecto()
        );
    }
}
