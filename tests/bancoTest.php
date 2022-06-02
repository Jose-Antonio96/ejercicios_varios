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

    public function DPtestgetSaldoBancoTotal(){
        $cuentabanco1= new banco(32351351, 2500 );
        $cuentabanco2= new banco(1241414, 2500 );
        $cuentas = [$cuentabanco1, $cuentabanco2];
        $esperado = 5000;
        return [
            "Total en un banco de dos cuentas con 2500 cada una"=>
                [$cuentas, $esperado
            ]
        ];
            
    }
    /**
    * @dataProvider DPtestgetSaldoBancoTotal
    */
    public function testgetSaldoBancoTotal($esperado, $actual){
        $this-> assertEquals(
            $esperado, $actual->
            banco::getSaldoBanco1()
        );
    }
    
}

?>