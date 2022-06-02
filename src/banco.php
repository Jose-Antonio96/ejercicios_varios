<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;
//Clase 4: Crea una clase banco. contendrá toda la lógica para incluir varios números de cuentas y sus saldos.
// Podrá hacerse ingresos y aplicar cargos. Un método que permita obtener el saldo final de una cuenta y el total en el banco.

class banco{
    private int $numcuenta;
    private int $saldo;
    private array $cuentas;
    private static $numcargas=0;
    private static $numingresos=0;

    public function __construct(int $numcuenta, int $saldo) {
        $this->numcuenta = $numcuenta;
        $this->saldo = $saldo;
        self::$numcargas=0;
        self::$numingresos=0;
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
    }

    public function cargar(int $saldo) {
        $this->saldo -= $saldo;
    }

    public function getnumCuentas(){
        return count($this->cuentas);
    }

    public function numcargas(){
        return self::$numcargas;
    }

    public function numingresos(){
        return self::$numingresos;
    }

    public function getSaldoFinalCuenta(){
        return 


        
}


