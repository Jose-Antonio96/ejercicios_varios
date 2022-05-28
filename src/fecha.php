<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;

use DateTime;

//Clase 2: Crea una clase Fecha. La clase contendrá además de constructores, y el método toString, 
//un método para comprobar si la fecha es correcta y otro para modificar la fecha actual por la del día siguiente.

class fecha {
    private int $año;
    private int $mes;
    private int $dia;
    private \DateTime $datetimeObj;

    public function __construct(int $año, int $mes, int $dia) {
        $this->datetimeObj = new \DateTime();
        $this->datetimeObj->setDate($año,$mes,$dia);
        $this->año = $año;
        $this->mes = $mes;
        $this->dia = $dia;
    }

    public function createFecha(int $año, int $mes, int $dia) {
        return new fecha($año, $mes, $dia);
    }

    public function getaño() {
        return $this->año;
    }

    public function getmes() {
        return $this->mes;
    }

    public function getdia() {
        return $this->dia;
    }

    public function __toString(){
        return $this->datetimeObj->format("j/n/Y"); //Esto indica que el objeto datetimeObj
                                            //tendrá 24h, 60 min y 60 sec de formato
    }

    public function validarFecha(\DateTime $datetimeObj):bool{
        return $datetimeObj === $this->datetimeObj;
    }

    public function getFechaActual():\DateTime{
        return $this->datetimeObj;
    }

    public function modificarFechaActual(){
        return $this->getFechaActual()->modify('+1 day');
    }

    public function getFechaSiguienteDia():\DateTime{
        return $this->modificarFechaActual();
    }
    


}   