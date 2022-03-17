<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');

    * {
        padding: 0;
        margin: 0;
        list-style: none;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
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

    p {
        padding: 400px 0 0 625px; 
        font-size: 250%
    }

    p.zero {
        padding: 0 0 0 800px;
    }

</style>

<?php

    $sigla = "MG";

    switch ($sigla){
        case "SP":
            echo "<p>Você escolheu </p><p class='zero' style='color: orange'>São Paulo</p>";
            break;
        case "RJ":
            echo "<p>Você escolheu </p><p class='zero' style='color: orange'>Rio de Janeiro</p>";
            break;
        case "MG":
            echo "<p>Você escolheu </p><p class='zero' style='color: orange'>Minas Gerais</p>";
            break;
        default:
            echo "NÃO ENCONTRADO";
            break;
    }


?>