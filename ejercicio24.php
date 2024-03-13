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

//Instancia o creacion de un objeto
$objalumno = new Persona();
$objalumno->asignarNombre("Chris1");

$objalumno1 = new Persona();
$objalumno1->asignarNombre("Jose");

$objalumno1 -> imprimirnombre();


//Imprimir propiedad
echo $objalumno-> nombre;

echo $objalumno1-> nombre;

echo $objalumno1->nombre;


?>