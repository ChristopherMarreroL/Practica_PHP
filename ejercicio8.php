<?php

if($_POST){
    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];

    //suma
    $suma= $ValorA+$ValorB;
    $resta= $ValorA-$ValorB;
    $multiplicacion= $ValorA*$ValorB;
    $division= $ValorA/$ValorB;

    echo "La suma de " .$ValorA." y " .$ValorB. " es: " .$suma. "<br/>";
    echo "La resta de " .$ValorA." y " .$ValorB. " es: " .$resta. "<br/>";
    echo "La multiplicacion de " .$ValorA." y " .$ValorB. " es: " .$multiplicacion. "<br/>";
    echo "La division de " .$ValorA." y " .$ValorB. " es: " .$division. "<br/>"."<br/>";
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">

    Valor A:
    <input type="text" name="ValorA" id="">
    <br/>

    Valor B:
    <input type="text" name="ValorB" id="">
    <br/>
    <br/>

    <input type="submit" value="Cacular">
    </form>

</body>
</html>