<?php
include_once "banco.php";
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
    public function testbancoSaldoInicial($esperado, $nif, $saldo){
        $cuentabanco= createCuenta($nif, $saldo);
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
                1235,
                0,
                50
            ]
        ];
    }
    /**
     * @dataProvider DPtestbancoSaldoIngresado
     */
    public function testbancoSaldoIngresado($esperado, $nif, $saldo, $ingresado){
        $cuentabanco2= createCuenta($nif, $saldo);
        $cuentabanco2->ingresar($ingresado);
        $this-> assertEquals(
            $esperado,
            $cuentabanco2->getSaldoFinalCuenta()
        );
    }

    public function DPtestgetSaldoBancoTotal(){
        $cuentabancos= banco::createBanco();
        $cuentas = [[32351351, 2500 ], [32351352, 2500]];
        $esperado = 5000;
        return [
            "Total en un banco de dos cuentas con 2500 cada una"=>
                [$esperado, $cuentabancos, $cuentas
            ]
        ];
            
    }
    /**
    * @dataProvider DPtestgetSaldoBancoTotal
    */
    public function testgetSaldoBancoTotal($esperado, $cuentabancos, $cuentas){
        $cuentabancos= banco::createBanco($cuentas);
        $this-> assertEquals(
            $esperado, $cuentabancos->banco::getSaldoBanco1()
        );
    }
    
}
?>