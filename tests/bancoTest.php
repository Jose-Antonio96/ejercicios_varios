<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\banco;
final class fechaTest extends Testcase{
    public function DPtestbanco(){
        $cuentabanco= new banco(6256221, 1000);
        return [
            "Prueba 5" => [
                [
                    'numcuenta' => 6256221,
                    'saldo' => 1000,
                $cuentabanco
                ]
            ]
        ];
        return 
    }
    /**
     * @dataProvider DPtestbanco
     */
    public function testbanco($esperado, $actual){
        $this-> assertEquals(
            $esperado,
            $actual->get
        );
}