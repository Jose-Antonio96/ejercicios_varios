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

    public function __construct(int $dia, int $mes, int $año) {
        $this->datetimeObj = new \DateTime();
        $this->datetimeObj->setDate($año,$mes,$dia);
        $this->año = $año;
        $this->mes = $mes;
        $this->dia = $dia;
    }

    public function createFecha(int $dia, int $mes, int $año) {
        return new fecha($dia, $mes, $año);
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
        return $this->datetimeObj->format('d/m/Y');
    }

    public function validarFecha():bool{
        return $this->getFecha()->format('d/m/Y') === $this->datetimeObj->format('d/m/Y');
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

    public function getFecha():\DateTime{
        return $this->datetimeObj;
    }
    


}   