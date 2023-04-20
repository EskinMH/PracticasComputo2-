<?php
abstract class Vehiculo{
    public $matricula;
    public $modelo;
    public $potenciacv;
    abstract public function getMatricula();
    abstract public function getModelo();
    abstract public function getPotencia();

}
class Taxi extends Vehiculo{
    private $numeroLicencia;
     public function getMatricula(){
         return $this->matricula;

    }
     public function getModelo(){
        return $this->modelo;

    }
     public function getPotencia(){
        return $this->potenciacv;

    }
    public function setNumeroLicencia(){
        
    }
    public function getNumeroLicencia(){
        
    }

    
}
class Autobus extends Vehiculo{
    private $numeroPlazas;
    public function getMatricula(){

    }
     public function getModelo(){

    }
     public function getPotencia(){

     }
     public function setNumeroPlazas(){

     }
     public function getNumeroPlazas(){

     }



}
$taxi=new Taxi;
?>