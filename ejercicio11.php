<?php

if($_POST){
    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];


    if($ValorA ==  $ValorB){
        echo "El valor de A es igual al valor de B <br/>";

        if($ValorA== 4){
            echo "El valor es 4 <br/>";
        }
        if($ValorA== 5){
            echo "El valor es 5 <br/>";
        }
    }
    if(($ValorA == $ValorB) && ($ValorA ==4)){
        echo "El valor de A es igual al valor de B y es 4";
    }
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
    
    <form action="ejercicio11.php" method="post">

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