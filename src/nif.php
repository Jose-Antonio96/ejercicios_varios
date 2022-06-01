<?php
namespace ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios;
//Clase 3: Crea una clase NIF. Los atributos serán el número de DNI y la letra. 
//La clase contendrá un método privado que calcule la letra del NIF a partir del número de DNI 
//y otro que compruebe si la letra es correcta o no.

class nif {
    private int $numerodni;
    private string $letra;

    public function __construct(int $numerodni, string $letra) {
        $this->numerodni = $numerodni;
        $this->letra = $letra;
    }

    public function createdni(int $numerodni, string $letra) {
        return new nif($numerodni, $letra);
    }

    public function getnumerodni() {
        return $this->numerodni;
    }

    public function getletra() {
        return $this->letra;
    }

    private function obtenerLetra(int $numerodni) :string{
        $letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E');
        return $letras[$numerodni % 23];
    }

    private function isLetraCorrecta():bool{
        return $this->letra === $this->obtenerLetra($this->numerodni);
    }

    public function __toString(){
        return $this->numerodni . $this->letra;
    }

    public function isNifCorrecto(){
        return $this->isLetraCorrecta();
    }

}