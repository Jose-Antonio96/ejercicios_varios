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
        $cuentabanco= new banco($numcuenta, $saldoinicial);
        $cuentabanco->ingresar($ingresado);
        $this-> assertEquals(
            $esperado,
            $cuentabanco->getSaldoFinalCuenta()
        );
    }

    public function DPtestgetSaldoBancoTotal(){
        return [
            "Total en un banco de dos cuentas con 2500 cada una"=>
                [5000, 
                32351351,
                1241414,
                2500, 2500
            ]
        ];
    }
    /**
     * @dataProvider DPtestgetSaldoBancoTotal
     */
    public function testgetSaldoBancoTotal($esperado2, $numcuenta1, $numcuenta2, $saldofinal1, $saldofinal2){
        $cuentabanco4= new banco($numcuenta1, $saldofinal1);
        $cuentabanco5= new banco($numcuenta2, $saldofinal2);
        $cuentabanco4->getSaldoFinalCuenta($numcuenta1);
        $cuentabanco5->getSaldoFinalCuenta($numcuenta2);

        $this-> assertEquals($esperado2, banco::getSaldoBanco2());
    }
}

?>