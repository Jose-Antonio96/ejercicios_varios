<?php
use PHPUnit\Framework\TestCase;
use ITEC\PRESENCIAL\DAW\PROG\ejerciciosvarios\nif;
include_once "nif.php";
final class nifTest extends TestCase{
    public function DPtestnif(){
        $dni= new nif("12345678", "V");
    }

}
