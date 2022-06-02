<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;
//Clase 4: Crea una clase banco. contendrá toda la lógica para incluir varios números de cuentas 
//y sus saldos. Podrá hacerse ingresos y aplicar cargos. Un método que permita obtener el 
//saldo final de una cuenta y el total en el banco.

class banco{
    private int $numcuenta;
    private int $saldo;
    private static array $cuentas;
    private int $numcargas;
    private int $numingresos;

    public function __construct(int $numcuenta, int $saldo) {
        $this->numcuenta = $numcuenta;
        $this->saldo = $saldo;
        $this->numcargas=0;
        $this->$numingresos=0;
        self::$cuentas[]=$this;
    }

    public function createCuenta(int $numcuenta, int $saldo) {
        return new banco($numcuenta, $saldo);
    }

    public function getnumcuenta() {
        return $this->numcuenta;
    }

    public function getsaldo() {
        return $this->saldo;
    }

    public function ingresar(int $saldo) {
        $this->saldo += $saldo;
        $this->numingresos++;
    }

    public function cargar(int $saldo) {
        $this->saldo -= $saldo;
        $this->numcargas++;
    }

    public static function getnumCuentas(){
        return count(self::$cuentas);
    }

    public function numcargas(){
        return $this->numcargas;
    }

    public function numingresos(){
        return $this->numingresos;
    }

    public function getSaldoFinalCuenta(){
        return $this->saldo;
    }

    public static function getSaldoBanco1(){
        return array_reduce(
            self::$cuentas,
            function($suma,$cuentaactual){
                $suma+=$cuentaactual->getSaldoFinalCuenta();
                return $suma;
            },
            0
        );
    }

    public static function getSaldoBanco2(){
        $suma=0;
        foreach(self::$cuentas as $cuenta){
            $suma += $cuenta->getSaldoFinalCuenta();
        }
        return $suma;
    }


        
}


