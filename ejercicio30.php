<?php

session_start();

$_SESSION["usuario"]="ok";
$_SESSION["estatus"]="dentro";

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/>"." Estatus: ".$_SESSION["estatus"];

?>