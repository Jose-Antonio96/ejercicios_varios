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
            $cuentabanco->getSaldoFinalCuenta()
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
            "Inicio 1000, ingreso 1000" =>[
                2000,
                1234,
                1000,
                1000
            ]
        ];
    }
    /**
     * @dataProvider DPtestbancoSaldoIngresado
     */
    public function testbancoSaldoIngresado($esperado, $numcuenta, $saldoinicial, $ingresado){
        $cuentabanco= new banco($numcuenta, $saldoinicial);
        $cuentabanco->ingresar($ingresado);
        $this-> assertEquals(
            $esperado,
            $cuentabanco->getSaldoFinalCuenta()
        );
    }

    public function DPtestgetSaldoBancoTotal(){
        return [
            "Cuenta numero 182343 con saldo 2500 y Cuenta numero 182344 con saldo 3500" => [
                    [182343, 182344], 6000, 2, [2500, 3500] 
            ]
        ];
    }
    /**
     * @dataProvider DPtestgetSaldoBancoTotal
     */
    public function testgetSaldoBancoTotal($cuentas, $esperado, $numcuenta, $saldoinicial){
        $cuentabanco1= new banco($numcuenta, $saldoinicial);
        $cuentabanco2= new banco($numcuenta, $saldoinicial);
        $cuentabanco1->getSaldoFinalCuenta;
        $cuentabanco2->getSaldoFinalCuenta;
        $cuentas = [$cuentabanco1, $cuentabanco2];
        $this-> assertEquals($cuentas, $esperado, banco::getSaldoBanco1());
    }
}

?>