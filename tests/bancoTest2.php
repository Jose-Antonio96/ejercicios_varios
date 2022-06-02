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
        $cuentabanco1= new banco($numcuenta1, $saldofinal1);
        $cuentabanco2= new banco($numcuenta2, $saldofinal2);
        $cuentabanco1->ingresar(2500);
        $cuentabanco2->ingresar(2500);
        $this-> assertEquals(
            $esperado2,
            $cuentabanco1->getSaldoBanco1($cuentabanco1, $cuentabanco2)
        );
    }
}

?>
