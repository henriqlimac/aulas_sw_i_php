<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php

            $vet = [2,3,56,9,4,10];
            function soma_vetor($x){
                $total = 0;
                for($i = 0 ; $i < count($x) ; $i++){
                    $total += $x[$i];
                }
                echo "A soma é $total";
            };

            soma_vetor($vet);


        ?>
    </body>
</html>