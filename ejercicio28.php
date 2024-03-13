<?php

//Conexion a base de datos

$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasena="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=ejercicios", $usuario,$contrasena ); 
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando', 'foto.jpg');";
    $conexion->exec($sql);

    echo "Conexion establecida.";

}catch(PDOException $error){
    echo "Conexion no establecida".$error;
}

?>