<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;
//Clase 1: Crea una clase Fracción con métodos para sumar, restar, multiplicar y dividir fracciones.

class fraccion {
    private int $num1;
    private int $num2;

    public function __construct(int $num1, int $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function getnum1() {
        return $this->num1;
    }

    public function getnum2() {
        return $this->num2;
    }

    public function sum(){
        return $this->getnum1() + $this->getnum2();
    }

    public function rest(){
        return $this->getnum1() - $this->getnum2();
    }

    public function mult(){
        return $this->getnum1() * $this->getnum2();
    }

    public function div(){
        return $this->getnum1() / $this->getnum2();
    }
}