<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\banco;
final class bancoTest extends Testcase{
    public function DPtestbancoSaldoInicial(){
        return [
            "Inicio 0" => [
                0,
                1234,
                0
            ],
            "Inicio 1000" =>[
                1000,
                1234,
                1000
            ]
        ];
    }
    /**
     * @dataProvider DPtestbancoSaldoInicial
     */
    public function testbancoSaldoInicial($esperado, $numcuenta, $saldoinicial){
        $cuentabanco= new banco($numcuenta, $saldoinicial);
        $this-> assertEquals(
            $esperado,
            $cuentabanco->getSaldoFinalCuenta($cuentabanco)
        );
    }

    public function DPtestbancoSaldoIngresado(){
        return [
            "Inicio 0, ingreso 100" => [
                100,
                1234,
                0,
                100
            ],
            "Inicio 0, ingreso 50" =>[
                50,
                1234,
                0,
                50
            ]
        ];
    }
    /**
     * @dataProvider DPtestbancoSaldoIngresado
     */
    public function testbancoSaldoIngresado($esperado, $numcuenta, $saldoinicial, $ingresado){
        $cuentabanco2= new banco($numcuenta, $saldoinicial);
        $cuentabanco2->ingresar($ingresado);
        $this-> assertEquals(
            $esperado,
            $cuentabanco2->getSaldoFinalCuenta()
        );
    }

}


