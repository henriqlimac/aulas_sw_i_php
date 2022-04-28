<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="php">
            <?php
                $nomes = ["Anderson", "Maria", "Pedro"];

                //echo $nomes[0];
                //echo $nomes[1];
                //echo $nomes[2];

                //Para ver todos os vetores
                
                for ($indice=0;$indice<=2;$indice++){
                    echo ($indice+1)."º - $nomes[$indice] <br>";
                }
            ?>
        </div>
    </body>
</html>