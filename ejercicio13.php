<?php

if($_POST){

    $boton=$_POST['btnvalor'];

    switch($boton){

        case 1:
            echo "Presionaste el boton 1.";
        break;
        
        case 2:
            echo "Presionaste el boton 2.";
        break;

        case 3:
            echo "Presionaste el boton 3.";
        break;
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
    <form action="ejercicio13.php" method="post">

    <input type="submit" name="btnvalor" value="1">
    <br/>
    <input type="submit" name="btnvalor" value="2">
    <br/>
    <input type="submit" name="btnvalor" value="3">

    </form>

</body>
</html>