<?php

class UnaClase{
    public static function metodo(){
        echo "Buenas";
    }
}

$obj= new UnaClase();
$obj->metodo();

UnaClase::metodo();

?>