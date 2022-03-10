<?php

    //$num1 = 5;
    //$num2 = 10;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];    
        
    $soma = $num1 + $num2;

    echo "<hr>";
    echo "A soma de " . $num1 . " + " . $num2 . " é igual a " . $soma;
    echo "<hr>";

?>