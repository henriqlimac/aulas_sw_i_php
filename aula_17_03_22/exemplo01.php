<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: black;
    }
        
    h1 {
        color: white;
        text-align: center;
        padding-top: 400px;
        font-size: 300%;
    }

</style>

<?php

    $nota = 5.5;

    //Deseja-se imprimir aprovado se a nota
    //do aluno for maior que 5 ou REPROVADO
    //se for menor que 5.

    if ($nota>5){
        //comandos se verdadeiro
        echo "<h1>APROVADO</h1>";
    }
    else{
        //comandos se falso
        echo "<h1>REPROVADO</h1>";
    }


?>