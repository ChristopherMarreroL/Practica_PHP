<?php

class Persona{
    //Propiedades
    public $nombre;
    private $edad;
    protected $altura;

    function __construct($NuevoNombre){
        $this->nombre=$NuevoNombre;
    }

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

//Instancia o creacion de un objeto
$objalumno = new Persona("Chris");
//$objalumno->asignarNombre("Chris");
$objalumno->imprimirnombre();




?>