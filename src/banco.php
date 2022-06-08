<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;
//Clase 4: Crea una clase banco. contendrá toda la lógica para incluir varios números de cuentas 
//y sus saldos. Podrá hacerse ingresos y aplicar cargos. Un método que permita obtener el 
//saldo final de una cuenta y el total en el banco.

class banco{
    private int $nif;
    private int $saldo;
    private array $cuentas;
    private int $numcargas;
    private int $numingresos;

    public function __construct() {
        $this->cuentas=[];
    }

    public static function createBanco(){
        return new banco();
    }

    public function createCuenta(int $nif, int $saldo){
        $this->nif = $nif;
        $this->saldo = $saldo;
    }

    public function getnif() {
        return $this->nif;
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

    public static function getnumeronifs(){
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


