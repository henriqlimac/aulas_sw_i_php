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
        color: green;
        text-align: center;
        padding-top: 400px;
        font-size: 300%;
    }

    h1.rep {
        color: red;
    }

    h1.rec {
        color: yellow;
    }

</style>

<?php

    $nota = 7;

    if ($nota>6){
        echo "<h1>APROVADO</h1>";
    }
    elseif ($nota<5){
        echo "<h1 class='rep'>REPROVADO</h1>";
    }
    else{
        echo "<h1 class='rec'>RECUPERAÇÃO</h1>";
    }


?>