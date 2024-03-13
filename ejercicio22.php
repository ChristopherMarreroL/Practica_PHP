<?php

$frutas= array("f"=>"Fresa", "p"=>"Pera", "m"=>"Manzana");

print_r($frutas);

echo $frutas["f"]."<br/>";

foreach($frutas as $indice=> & $valor){
    echo $valor."<br/>";
}


?>