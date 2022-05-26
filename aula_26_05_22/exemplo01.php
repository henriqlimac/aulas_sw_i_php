<?php

// 1 - Função sem retorno e sem paramêtro
// 2 - Função sem retorno e com paramêtro
// 3 - Função com retorno e sem paramêtro
// 4 - Função com retorno e com paramêtro

//---------------------------------------

// 1 -

    function teste1(){
        echo "Kini Lima";
    };

    teste1();
    echo "<hr>";

// 2-

    function teste2($a){
        echo $a;
    };
    
    //Variável "$a" tem escopo local

    teste2('Bom dia!');
    echo "<br>";
    teste2('Te amo Vivian <3');
    echo "<hr>";

// 3-

    function teste3(){
        $b = 'Kini';
        return $b;
    };

    $resultado = teste3();
    echo $resultado;

    echo "<hr>";

// 4-

    function teste4($c,$d){

        $soma = $c + $d;
        return $soma;
    };

    $num1 = 10;
    $num2 = 20;

        $result = teste4($num1,$num2);
        echo "A soma é: $result";
        Echo "<hr>";