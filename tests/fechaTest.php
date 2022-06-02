<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\fecha;
final class fechaTest extends Testcase{
    public function DPtestfecha(){
        $fecha1= new fecha(12,04,2005);
        return [
            "Prueba 3" => [
                '12/04/2005', $fecha1
            ]
        ];
    }
    /**
     * @dataProvider DPtestfecha
     */
    public function testfecha($esperado, $actual){
        $this-> assertEquals(
            $esperado,
            $actual->__toString()
        );
    }

    public function DPtestvalidarfecha(){
        $fecha2= new fecha(14,06,2021);
        return [
            "Prueba 4" => [
                true, $fecha2
            ]
        ];
    }
    /**
     * @dataProvider DPtestvalidarfecha
     */
    public function testvalidarfecha($esperado, $actual){
        $this-> assertTrue(
            $esperado,
            $actual->validarFecha()
        );
    }
}