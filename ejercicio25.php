<?php

class Persona{
    //Propiedades
    public $nombre;
    private $edad;
    protected $altura;

    //Asignciones o metodos
    public function asignarNombre($NuevoNombre){
        $this->nombre=$NuevoNombre;
    }
    public function imprimirnombre(){
        echo "Hola soy ".$this->nombre;
    }
    public function mostraredad(){
        $this->edad=20;
        return $this->edad;
    }

}

class Trabajador extends Persona{
    public $puesto;
    public function presentacion(){
        echo "Hola soy ".$this->nombre. " y soy un ". $this->puesto;
    }

}



//Instancia o creacion de un objeto
$objTrabajador= new Trabajador();
$objTrabajador->asignarNombre("Chris");
$objTrabajador->puesto="Profesor";

$objTrabajador->presentacion();


?>