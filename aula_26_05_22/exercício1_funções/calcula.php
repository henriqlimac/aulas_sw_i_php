<?php
    $numero = $_POST['num'];
    $graus = $_POST['graus'];

    function calculaC($c){
        $farenheit = $c * 9/5 + 32;
        echo "$c * 9/5 + 32 = $farenheit";
    }

    function calculaF($f){
        $celsius = ($f - 32) * 5 / 9;  
        echo "($f - 32) * 5 / 9 = $celsius";
    }

    if ($numero == 1) {
        calculaC($graus);
    } else {
        if ($numero == 2) {
            calculaF($graus);
        }
    };
        

