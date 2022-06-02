<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\banco;
final class bancoTest2 extends Testcase{
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
