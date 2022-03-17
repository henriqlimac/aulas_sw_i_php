<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        color: white;
    }

    body {
        background-color: black;
    }
        
    h1 {
        color: green;
        text-align: center;
        font-size: 300%;
    }

    h1.rep {
        color: red;
    }

    p {
        text-align: center;
        font-size: 200%;
    }

    h1.top {
        padding-top: 350px;
        color: white;
    }

</style>

<?php

    $idade = 18;
    $habi = TRUE;

        echo "<h1 class='top'>REQUISITOS MÍNIMOS:</h1>";

        if ($idade >= 18){
            echo "<p>- IDADE MÍNIMA APROVADA -</p>";
        } else {
            echo "<p style='color: red'>- IDADE MÍNIMA NÃO APROVADA -</p>";
        }



        if ($habi == TRUE){
            echo "<p>- HABILITAÇÃO APROVADA -</p>";
        } else {
            echo "<p style='color: red'>- NÃO HABILITADO -</p>";
        }



        if ($idade>=18 && $habi == TRUE){
            echo "<h1>Você foi HABILITADO para dirigir!</h1>";
        } else{
            echo "<h1 class='rep'>Você NÃO foi HABILITADO para dirigir!</h1>";
        }

?>