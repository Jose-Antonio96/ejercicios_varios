<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\banco;
final class banco2Test extends Testcase{
        public function DPtestgetSaldoBancoTotal(){
        $esperado = 2000;
        return [ 
            "Cuenta numero 1234 y cuenta numero 1235, 1000 euros en cada una respectivamente" => [
                1234,
                1000,
                1235,
                1000,
                $esperado
            ]
        ];
    }
    /**
     * @dataProvider DPtestgetSaldoBancoTotal
     */
    public function testgetSaldoBancoTotal($numcuenta, $saldoinicial, $numcuenta2, $saldoinicial2, $esperado){
        $cuentabanco3= new banco($numcuenta, $saldoinicial);
        $cuentabanco4= new banco($numcuenta2, $saldoinicial2);
        $this-> assertEquals(
            $esperado,
            banco::getSaldoBanco1()
        );
    }
    
}